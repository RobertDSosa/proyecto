<x-app-layout>

    <div class="container py-8 bg-gray-200 rounded-lg shadow-lg">
        <h1 class="text-4xl font-bold text-black">{{$post->name}}</h1>

        <div class="text-lg text-black mb-2">
            {!!$post->extract!!}
        </div>

        <div class="grid grid-cols-3 gap-6">

            {{-- Contenido principal --}}
            <div class="col-span-2">
                <figure>
                    @if ($post->image)
                        <img class="w-full h-80 object-auto object-center" src="{{Storage::url($post->image->url)}}" alt="">
                    @else
                        <img class="w-full h-72 object-auto object-center"src="{{Storage::url('Default.jpg')}}" alt="">

                    @endif
                </figure>

                <div class="text-base text-black mt-4">
                    {!!$post->body!!}
                </div>

                @isset($post->video->url)
                <video id="Video" src="{{Storage::url($post->video->url)}}" width="640" height="480" controls>
                    <source src="{{Storage::url($post->video->url)}}">
                </video>
                @endif

                @isset($post->video->youtube_link)

                    @php $link= str_replace("watch?v=", "embed/", $post->video->youtube_link); @endphp
                    <iframe width="560" height="315" src="{{$link}}" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>

                @endif

                @isset($post->audio)

                <h6>{{$post->audio->name}}</h6>
                <audio id="Audio" src="{{Storage::url($post->audio->url)}}" controls>
                    
                </audio>
                
                @endif
            </div>

            {{-- Contenido relacionado  --}}
            <aside>
                <h1 class="text-2xl font-bold text-gray-600 mb-4">Más en {{$post->category->name}}</h1>
                <ul>
                    @foreach ($similares as $similar)
                        <li class="mb-4">
                            <a class="flex" href="{{route('posts.show', $similar)}}">
                                @if ($similar->image)
                                    <img class="w-36 h-20 object-auto object-center" src="{{Storage::url($similar->image->url)}}" alt="">

                                @else
                                    <img class="w-36 h-20 object-auto object-center"src="{{Storage::url('Default.jpg')}}" alt="">
                                @endif
                            <span class="ml-2 text-gray-600">{{$similar->name}}</span>
                        </a>
                        </li>
                    @endforeach
                </ul>
            </aside>
        </div>
    </div>

</x-app-layout>