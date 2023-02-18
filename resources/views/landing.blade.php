<x-guest-layout>
    <!-- Background image -->
    <div class="relative overflow-hidden bg-no-repeat bg-cover" style="
    background-position: 50%;
    background-image: url('https://mdbcdn.b-cdn.net/img/new/slides/146.webp');
    height: 350px;
    ">
    <div class="absolute top-0 right-0 bottom-0 left-0 w-full h-full overflow-hidden bg-fixed"
        style="background-color: rgba(0, 0, 0, 0.75)">
        <div class="flex justify-center items-center h-full">
        <div class="text-center text-white px-6 md:px-12">
            <h1 class="text-5xl font-bold mt-0 mb-6">Landing Page</h1>
            <h3 class="text-3xl font-bold mb-8">Testing datasets</h3>

            {{-- SEARCH --}}

                <div>
                <form action="/search-results" method="GET">
                    <label for="default-search" class="mb-2 text-sm font-medium text-gray-900 sr-only">Search</label>
                    <div class="relative">
                        <div class="absolute inset-y-0 left-0 flex items-center pl-3 pointer-events-none">
                            <svg aria-hidden="true" class="w-5 h-5 text-gray-500" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M21 21l-6-6m2-5a7 7 0 11-14 0 7 7 0 0114 0z"></path></svg>
                        </div>
                        <input name="search" type="search" id="default-search" class="block w-full p-4 pl-10 text-sm text-gray-900 border-gray-300 rounded-lg  focus:ring-blue-500 focus:border-blue-500" placeholder="Explore various datasets" required>
                        <button type="submit" class="text-white absolute right-2.5 bottom-2.5 bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm px-4 py-2">Search</button>
                    </div>
                </form>
            </div>
            {{-- END SEARCH  --}}

        </div>
        </div>
    </div>
    </div>
    <!-- Background image -->

        <br>
        <br>


    <div class="p-6 bg-white border-b border-gray-200">
        <h1><b>About</b></h1>
         <h1 x-data="{ message: 'I ❤️ Alpine' }" x-text="message"></h1><h1 x-data="{ message: 'I ❤️ Alpine' }" x-text="message"></h1><h1 x-data="{ message: 'I ❤️ Alpine' }" x-text="message"></h1>
    </div>

    {{-- SECTION --}}
    <h3 class="text-3xl mt-4 mb-2">Latest Datasets</h3>
    <div class="grid grid-cols-2 gap-4">
        @foreach ($uploads as $upload )
            <div class="flex flex-col items-center bg-white border border-gray-200 rounded-lg shadow md:flex-row md:max-w-xl">
                <img class="object-cover w-full rounded-t-lg h-96 md:h-auto md:w-48 md:rounded-none md:rounded-l-lg" src="{{ asset('images/upload.png') }}" alt="Picture">
                <div class="flex flex-col justify-between p-4 leading-normal">
                    <a href="/uploads/{{$upload->_id}}">
                        <h5 class="mb-2 text-2xl font-bold tracking-tight text-gray-900">{{$upload->title}}</h5>
                    </a>
                    <p class="mb-3 font-normal text-gray-700"> {{$upload->description}} </p>
                    <ul class="nav-pills flex flex-col md:flex-row flex-wrap list-none pl-0 mb-4">
                        <li><a href="{{route('group.create')}}" class="bg-red-500 hover:bg-red-700 text-white font-bold py-2 px-4 mr-2 rounded-full">Tag 1</a></li>
                        <li><a href="{{route('group.create')}}" class="bg-red-500 hover:bg-red-700 text-white font-bold py-2 px-4 mr-2 rounded-full">Tag 2</a></li>
                    </ul>
                    <p>Created at: {{ $upload->created_at->format('d F Y') }} </p>
                    <p>Type: {{ $upload->type}} </p>
                </div>
            </div>
        @endforeach
    </div>

    <hr>

    {{-- END SECTION --}}

    {{-- SECTION --}}
    <div class="full-width">
        <div class="p-6 bg-white border-b border-gray-200">
            <h1><b>TESTinggggggggg</b></h1>
            <h1 x-data="{ message: 'I ❤️ Alpine' }" x-text="message"></h1><h1 x-data="{ message: 'I ❤️ Alpine' }" x-text="message"></h1><h1 x-data="{ message: 'I ❤️ Alpine' }" x-text="message"></h1>
        </div>
        <p> Lorem ipsum dolor sit amet, consectetur adipisicing elit. Asperiores quae, molestiae rerum autem, quod doloremque laudantium dolorum sunt officiis sed nisi voluptatem quos ea magni cum tempora saepe, dignissimos quaerat.
            Lorem ipsum dolor sit amet, consectetur adipisicing elit. Quaerat eos ea numquam enim consequuntur, quas explicabo. Quae, aut voluptate repellat atque nulla necessitatibus mollitia perferendis placeat aliquam ipsam et tempora?
        Lorem ipsum dolor sit amet consectetur adipisicing elit. Cupiditate dolor delectus fuga nihil possimus aspernatur distinctio, veritatis eum quam perspiciatis aliquid debitis neque officia obcaecati quibusdam ex incidunt praesentium nisi?
    Lorem ipsum dolor sit amet consectetur adipisicing elit. Quidem nesciunt officiis, tempora earum rerum, soluta sint nam quae quos unde pariatur ipsum iste fugit, ad magnam neque nostrum reprehenderit adipisci.
Lorem ipsum dolor sit amet consectetur adipisicing elit. Labore numquam in vero, laudantium alias asperiores enim non maiores distinctio quod magni temporibus nobis cum quia itaque quo, a id cumque!
Lorem ipsum dolor sit amet consectetur adipisicing elit. Explicabo consequuntur, excepturi dolores ipsam recusandae rem qui corrupti repudiandae eos culpa quasi modi distinctio perspiciatis quo est! Eos odit alias nobis!
Lorem ipsum dolor sit amet consectetur adipisicing elit. Illo assumenda tempore libero. Hic natus excepturi, neque voluptatibus tenetur aliquid inventore sunt earum quaerat? Minima ad dicta veniam cumque eligendi eaque.
Lorem ipsum dolor sit amet consectetur adipisicing elit. Nisi aliquid corporis dolor tempore cumque architecto, laudantium deserunt dolore voluptates nostrum nemo sapiente iure ut, obcaecati dolores? Deserunt quisquam repellendus animi.
Lorem ipsum dolor sit, amet consectetur adipisicing elit. Veritatis laboriosam animi id at blanditiis. Cum suscipit voluptas doloribus expedita illo fugit, distinctio cumque saepe labore deleniti, dolorum quia tempora? Illo?
Lorem ipsum dolor sit amet consectetur adipisicing elit. Dolor commodi veniam quidem aliquid soluta quasi et illo, distinctio ullam nemo vero praesentium ea, ipsa quis autem blanditiis iusto veritatis quibusdam?
Lorem ipsum dolor sit amet, consectetur adipisicing elit. Nesciunt molestiae, cupiditate ratione vitae commodi accusantium aperiam. Provident facere unde, ipsa ea ipsam voluptatibus sit nesciunt impedit illo sequi, magni quam.
Lorem ipsum dolor sit, amet consectetur adipisicing elit. Magnam tempora excepturi cum quae, corrupti obcaecati. Vel libero iure atque sint obcaecati. Ipsam quidem voluptatem praesentium natus beatae sequi illo autem?
 </p>
    </div>
</x-guest-layout>