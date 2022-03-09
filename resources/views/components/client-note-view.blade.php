<div class="row mb-2">         
  <div class="col-md text-secondary">
    <p class="h5">Notes Content</p>
  </div>
  <div class="col-md-2 text-secondary">
     <p class="h5">Posted</p>
  </div>
  <div class="col-md-2 text-secondary">
     <p class="h5">Updated</p>
  </div>
</div>
{{-- Is there any notes? --}}
@if ($notes->count() == 0)
  <div class="row">
    <div class="col-md text-center">
      <h5>No current notes</h5>
    </div>
  </div>
@else
  @foreach ($notes as $note)
  <div class="row p-2">         
    <div class="col-md-2 text-secondary">
      <a href='{{route('note.show', $note->id)}}' class='text-decoration-none'><i class="fas fa-sticky-note"></i> {!! $note->note_title !!}</a>
    </div>
    <div class="col-md text-secondary">
      {!! substr($note->content, 0, 90) !!}
    </div>
    <div class="col-md-2 text-secondary text-truncate">
      {{\Carbon\Carbon::parse($note->created_at)->diffForHumans();}}
    </div>
    <div class="col-md-2 text-secondary text-truncate">
      {{\Carbon\Carbon::parse($note->updated_at)->diffForHumans();}}
    </div>
  </div>
  <hr> 
  @endforeach
@endif
