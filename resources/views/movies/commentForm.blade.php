        
<form action="/comment/add/{{$movie->id}}" method="post">
    <p style="color:gray" >Add new comment.</p>
        <div class="form-row">
            <div class="form-group col-md-5">
                <input type="text" class="form-control" name="content" placeholder="Your comment">
            </div>
        </div>
            <button type="submit" class="btn btn-secondary">Add Comment</button>
        @csrf
</form>
