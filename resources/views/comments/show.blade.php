<h3 id="comments" class="text-center pt-3 pb-2">Comments</h3>
<ul class="list-group-flush mb-3">
    @foreach ($comments as $comment)
        <li class="justify-content-between list-group-item ">
            <div class="row">
                <div class="col">
                    {{  $comment->comment }}
                </div>
                <div class="col-auto ml-auto">
                    <form class="form-inline" action="/comment/{{ $comment->id }}" method="POST">
                        {{ csrf_field() }}
                        {{ method_field('DELETE') }}
                        <input type="submit"
                        value="delete" style="border: none; background:none"
                        class="material-icons"></input>
                    </form>
                </div>
            </div>
        </li>
    @endforeach
</ul>
