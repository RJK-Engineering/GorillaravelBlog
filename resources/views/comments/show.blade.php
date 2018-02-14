<h3 id="comments" class="text-center pt-3 pb-2">Comments</h3>
<ul class="list-group pb-5">
    @foreach ($comments as $comment)
        <li class="list-group-item border-left-0 border-right-0">{{  $comment->comment }}</li>
    @endforeach
</ul>
