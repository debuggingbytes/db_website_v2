<div class="row">         
  <div class="col-md-2 text-secondary">
    <a href='{{route('note.show', $note->id)}}' class='text-decoration-none'><i class="fas fa-sticky-note"></i> {!! $note->note_title !!}</a>
  </div>

  <div class="col-md text-secondary text-truncate">
    {!! $note->content !!}
  </div>

  <div class="col-md-2 text-secondary text-truncate">
    {{\Carbon\Carbon::parse($note->created_at)->diffForHumans();}}
  </div>

  <div class="col-md-2 text-secondary text-truncate">
    {{\Carbon\Carbon::parse($note->updated_at)->diffForHumans();}}
  </div>

</div> 
<hr> 