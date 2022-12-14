@foreach($comments as $comment)
    <div class="display-comment" @if($comment->parent_id != null) style="margin-left:20px;" @endif>
        <strong>{{ $comment->user->name }}</strong>
        <p>{{ $comment->description }}</p>
       
        <form method="post" action="{{ url('/comment/store'   ) }}">
            @csrf
            <div class="form-group">
                <input type="text" name="description" class="form-control" />
                <input type="hidden" name="post_id" value="{{ $post_id }}" />
                <input type="hidden" name="parent_id" value="{{ $comment->id }}" />
            </div>
            {{-- <div class="form-group">
                <input type="submit" class="btn btn-warning" value="Reply" />
            </div> --}}
        </form>
        @include('posts.commentsDisplay', ['comments' => $comment->replies])
       
    </div>
@endforeach