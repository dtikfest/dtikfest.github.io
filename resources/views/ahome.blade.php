@forelse ($post->tags as $p)
{{$p->name}}
@empty

@endforelse
