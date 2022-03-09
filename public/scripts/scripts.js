
//Date function for copyright
const d = new Date;
const date = d.getFullYear();
const dateArea = document.querySelector("#date");
dateArea.innerText = date;


//Load mail and alerts onpage load
function updateAlerts() {
  $('#alertsCount').load(location.href + ' #alertsCount');
  $('#alerts').load(location.href + ' #alerts');

}






// function for task completion
function completeTask(tid, uid, task) {
  $('#message').load("./includes/tasks/complete.task.php?project_id=" + tid + "&user_id=" + uid + "&task=" + task + "&tasktype=task");
  setTimeout(() => {
    $(location).attr('href', 'profile.php?s=work')
  }, 3000);

}

// Function for ticket completion
function completeTicket(tid, uid, task) {
  $('#message').load("./includes/tasks/complete.task.php?ticket_id=" + tid + "&user_id=" + uid + "&task=" + task + "&tasktype=ticket");
  setTimeout(() => {
    $(location).attr('href', 'profile.php?s=tickets')
  }, 3000);

}

//Alert & Mail Functions

function markReadAlert(id) {
  $('#message').load("./includes/notifications/handler.note.php?type=readAlert&alert_id=" + id);
  setTimeout(() => {
    $('#message').fadeOut();
  }, 1500);
}
function markUnreadAlert(id) {
  $('#message').load("./includes/notifications/handler.note.php?type=unreadAlert&alert_id=" + id);
  setTimeout(() => {
    $('#message').fadeOut();
  }, 1500);
}
function deleteAlert(id) {
  $('#message').load("./includes/notifications/handler.note.php?type=deleteAlert&alert_id=" + id);
  setTimeout(() => {
    $('#message').fadeOut();
  }, 1500);
  setTimeout(() => {
    $(location).attr('href', 'profile.php?s=alerts')
  }, 3000);
}

function markReadMail(id) {
  $('#message').load("./includes/notifications/handler.note.php?type=readMail&alert_id=" + id);
  setTimeout(() => {
    $('#message').fadeOut();
  }, 1500);

}
function markUnreadMail(id) {
  $('#message').load("./includes/notifications/handler.note.php?type=unreadMail&alert_id=" + id);
  setTimeout(() => {
    $('#message').fadeOut();
  }, 1500);

}
function deleteMail(id) {
  $('#message').load("./includes/notifications/handler.note.php?type=deleteMail&alert_id=" + id);
  setTimeout(() => {
    $('#message').fadeOut();
  }, 1500);
  setTimeout(() => {
    $(location).attr('href', 'profile.php?s=alerts')
  }, 3000);
}

// onChange functions for mail / alerts

$('.alert-control').change(function () {
  const select = $('.alert-control').find(":selected").val();
  // console.log(select)
  switch (select) {
    case '1':
      $("#alert-side").load("./includes/notifications/alerts.view.php?selector=1");
      break;
    case '2':
      $("#alert-side").load("./includes/notifications/alerts.view.php?selector=2");
      break;
    default:
      $("#alert-side").load("./includes/notifications/alerts.view.php?selector=0");
      break;
  }
  $("#alert-side").html("<span class='red'>Hello <b>Again</b></span>");
});

$('.mail-control').change(function () {
  const select = $('.mail-control').find(":selected").val();
  switch (select) {
    case '1':
      $("#mail-side").load("./includes/notifications/messages.view.php?selector=1");
      break;
    case '2':
      $("#mail-side").load("./includes/notifications/messages.view.php?selector=2");
      break;
    default:
      $("#mail-side").load("./includes/notifications/messages.view.php?selector=0");
      break;
  }
  // console.log(select)
});



// User Management Functions

$('#add-user').change(async (e) => {
  // Stop form from submitting
  e.preventDefault();
  // Setup our variables
  const uname = document.querySelector("input[name='uname']");
  const pword = document.querySelector("input[name='pword']");
  const email = document.querySelector("input[name='email']");
  const is_admin = document.querySelector("#is_admin");

  // Is this username in the database already?

  if (uname.value != "") {
    let validateUname = await fetch("./includes/users/handler.user.php?action=check&value=" + uname.value)
      .then((response) => response.text())
      .then(data => {
        return data;
      })
      .catch(error => {
        console.error(error);
      });
    if (validateUname == 1) {
      uname.classList.remove('is-valid');
      uname.classList.add("is-invalid");
    } else {
      uname.classList.remove("is-invalid");
      uname.classList.add("is-valid");
    }
  }
  // Is the Email in that database already?
  if (email.value != "") {
    let validateEmail = await fetch("./includes/users/handler.user.php?action=check&value=" + email.value)
      .then((response) => response.text())
      .then(data => {
        return data;
      })
      .catch(error => {
        console.error(error);
      });
    // console.log(validateEmail + "VALID EMAIL?")
    if (validateEmail == 1) {
      email.classList.remove('is-valid');
      email.classList.add("is-invalid");
    } else {
      email.classList.remove("is-invalid");
      email.classList.add("is-valid");
    }
  }


  // console.log(uname.value + " " + pword.value + " " + email.value + " " + is_admin.value);
})

// Javascript only to work if "add-user" is found
const form = document.querySelector("#add-user");
if (form) {
  form.addEventListener("submit", async (e) => {
    e.preventDefault();

    const uname = document.querySelector("input[name='uname']")
    const pword = document.querySelector("input[name='pword']")
    const email = document.querySelector("input[name='email']");
    const is_admin = document.querySelector("#is_admin");
    // console.log(uname + " " + pword + " " + email + " " + is_admin);

    try {
      let msg = await fetch("./includes/users/handler.user.php?action=add&user=" + uname.value + "&pword=" + pword.value + "&email=" + email.value + "&admin=" + is_admin.value)
        .then((response) => response.text())
        .then(data => {
          return data;
        })
        .catch(error => {
          console.error(error);
        });

      //Reset form values to empty
      uname.value = "";
      pword.value = "";
      email.value = "";
      // console.log(msg);

      $('#message').html(msg);
      $('#message').fadeIn(() => {
        setTimeout(() => {
          $('#message').fadeOut(5000)
        }, 1000)
      });

    } catch (err) {
      console.log(err);
    }


  })
}





