<x-app-layout>

    <div class="bg-cover min-w-full h-40 bg-left  bg-no-repeat bg-opacity-25 rounded-sm shadow-xl" style="background-image: url({{Storage::url('Quienes_somos.png')}})"></div>

    <div class="container pt-6 pb-2">
        
        <h1 class="text-3xl font-bold pl-3 pb-2">Últimas publicaciones</h1>

        <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-6">
            <div class="grid grid-cols-3 col-span-2 gap-6">
            @foreach ($posts as $post)

            <div class="gap-5 ">
                <!--Card 1-->
                <div class="rounded overflow-hidden shadow-lg bg-gray-200 h-96">
                  <a href="{{route('posts.show', $post)}}" class="">
                      <img class="w-full h-40 bg-cover bg-center " src="@if($post->image) {{Storage::url($post->image->url)}} @else {{Storage::url('Default.jpg')}} @endif" alt="{{$post->name}}">
                    </a>
                  <div class="px-6 py-4 ">
                    <div class="font-bold text-lg mb-2 hover:text-green-700">
                        <a href="{{route('posts.show', $post)}}">
                            @php
                               $slenghtname = strlen($post->name);
                            @endphp
                            @if ($slenghtname < 49)
                                {!!$post->name!!}
                            @else
                            @php
                                $title = substr($post->extract, 0, 85);
                            @endphp
                                {!!$title!!}... 
                            @endif
                        </a>
                    </div>
                    <p class="text-gray-700  text-base">
                        @php
                            $slenght = strlen($post->extract);
                        @endphp
                        @if ($slenght < 15)
                            {!!$post->extract!!}
                        @else
                            @php
                                $extract = substr($post->extract, 0, 85);
                            @endphp
                            {!!$extract!!}... 
                        @endif
                        
                    </p>
                  </div>
                  <div class="px-6 pt-4 pb-2">
                    {{-- <a href="{{route('posts.category', $post->category)}}" class=" block bg-gray-200 rounded-full px-3 py-1 text-base">Categoría: {{$post->category->name}}</a>   --}}
                    @foreach($post->tags as $tag)
                        <a href="{{route('posts.tag', $tag)}}" class="inline-block bg-{{$tag->color}}-400 rounded-full px-3 py-1 text-sm font-semibold text-white mr-2 mb-2">{{$tag->name}}</a>
                    @endforeach                    
                  </div>
                  
                </div>
                
                
            </div>

                {{-- <article class=" w-full h-80 bg-cover bg-center contrast-50 brightness-50 @if($loop->first) md:col-span-2  @endif" style="background-image: url(@if ($post->image) {{Storage::url($post->image->url)}} @else https://cdn.pixabay.com/photo/2018/04/29/23/01/tree-3361331_960_720.jpg @endif)">
                    <div class="w-full h-full px-8 flex flex-col justify-center">

                        <div>
                            @foreach ($post->tags as $tag)
                                <a href="{{route('posts.tag', $tag)}}" class="inline-block px-3 h-6 bg-{{$tag->color}}-600 text-white rounded-full">{{$tag->name}}</a>
                            @endforeach
                        </div>

                        <h1 class="text-4xl text-white leading-8 font-bold mt-2">
                            <a href="{{route('posts.show', $post)}}">
                                {{$post->name}}
                            </a>
                        </h1>
                    </div>
                </article> --}}

                {{-- <div class="p-10">  
                    <!--Card 1-->
                    <div class="max-w-sm rounded overflow-hidden shadow-lg">
                      <img class="w-full" src="/mountain.jpg" alt="Mountain">
                      <div class="px-6 py-4">
                        <div class="font-bold text-xl mb-2">Mountain</div>
                        <p class="text-gray-700 text-base">
                          Lorem ipsum dolor sit amet, consectetur adipisicing elit. Voluptatibus quia, nulla! Maiores et perferendis eaque, exercitationem praesentium nihil.
                        </p>
                      </div>
                      <div class="px-6 pt-4 pb-2">
                        <span class="inline-block bg-gray-200 rounded-full px-3 py-1 text-sm font-semibold text-gray-700 mr-2 mb-2">#photography</span>
                        <span class="inline-block bg-gray-200 rounded-full px-3 py-1 text-sm font-semibold text-gray-700 mr-2 mb-2">#travel</span>
                        <span class="inline-block bg-gray-200 rounded-full px-3 py-1 text-sm font-semibold text-gray-700 mr-2 mb-2">#winter</span>
                      </div>
                    </div>
                  </div> --}}
            @endforeach
            </div>

            <div>

                {{-- Aside del Portal --}}
                <aside>

                    {{-- Full Callendar --}}

                    

                    <div class="gap-5 ">
                        <!--Card 1-->
                        <div class="rounded overflow-hidden shadow-lg bg-gray-200">
                          <img class="w-full" src="{{Storage::url('podcast_1.jpg')}}" alt="Podcasts">
                          <div class=" w-full font-bold text-2xl text-white mb-2 px-6 bg-green-700"><p class="py-2">Últimos Podcasts</p></div>
                          <div class="px-6">
                            
                            <p class="text-gray-700  text-xl">
                                @foreach($posts as $post)

                                @isset($post->audio->name)
                                    <h6 class="text-lg">{{$post->audio->name}}</h6>
                                @endisset 

                                @isset($post->audio->url)
                                    <audio id="Audio" src="{{Storage::url($post->audio->url)}}" controls>
                        
                                    </audio>
                                @endisset
                                
                            @endforeach
                            </p>
                          </div>
                          
                        </div>
                        
                        
                    </div>

                   <br>

                    {{-- Último video --}}

                    <div class="gap-5 ">
                        <!--Card 1-->
                        <div class="rounded overflow-hidden shadow-lg bg-gray-200">
                          {{-- <img class="w-full" src="{{Storage::url('podcast_1.jpg')}}" alt="Podcasts"> --}}
                          <div class="">
                            <div class="px-6 font-bold text-2xl text-white bg-green-700 w-full mb-2"><p class="py-2">Último Video</p></div>
                            <p class="text-gray-700  text-xl">
                                @foreach($posts as $post)

                                
                                @isset($post->video->name)
                                    <h6>{{$post->video->name}}</h6>
                                @endisset 

                                @isset($post->video->url)
                                <video id="Video" src="{{Storage::url($post->video->url)}}" width="400" height="240" controls >
                                    <source src="{{Storage::url($post->video->url)}}">
                                </video> <br> 
                                    @php
                                        break;
                                    @endphp
                                @endisset

                                @isset($post->video->youtube_link)
                                    @php $link= str_replace("watch?v=", "embed/", $post->video->youtube_link); @endphp
                                    <iframe width="385" height="280" src="{{$link}}" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>

                                    @php
                                        break;
                                    @endphp
                                @endisset
                                
                                
                            @endforeach
                            </p>
                          </div>
                          
                        </div>
                        
                        
                    </div>
                    
                </aside>
            </div>
        </div>

        

        <div class="mt-4">
            {{$posts->links()}}
        </div>
    </div>


</x-app-layout>