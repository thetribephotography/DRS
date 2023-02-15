<x-guest-layout>
    <div class="block p-6 rounded-lg shadow-lg bg-white max-w-md">
        <form  action="/create-test-user" method="POST">
            @csrf
          <div class="grid grid-cols-2 gap-4">
            <div class="form-group mb-6">
              <input type="text" name="name" class="form-control
                block
                w-full
                px-3
                py-1.5
                text-base
                font-normal
                text-gray-700
                bg-white bg-clip-padding
                border border-solid border-gray-300
                rounded
                transition
                ease-in-out
                m-0
                focus:text-gray-700 focus:bg-white focus:border-blue-600 focus:outline-none" id="exampleInput123"
                aria-describedby="emailHelp123" placeholder="First name">
                @error('name')
                    <p class="text-red-500 text-xs mt-1">{{$message}}</p>
                @enderror
            </div>

          </div>
          <div class="form-group mb-6">
            <input type="email" name="email" class="form-control block
              w-full
              px-3
              py-1.5
              text-base
              font-normal
              text-gray-700
              bg-white bg-clip-padding
              border border-solid border-gray-300
              rounded
              transition
              ease-in-out
              m-0
              focus:text-gray-700 focus:bg-white focus:border-blue-600 focus:outline-none" id="exampleInput125"
              placeholder="Email address">
          </div>
          <div class="form-group mb-6">
            <input type="password"  name="password" class="form-control block
              w-full
              px-3
              py-1.5
              text-base
              font-normal
              text-gray-700
              bg-white bg-clip-padding
              border border-solid border-gray-300
              rounded
              transition
              ease-in-out
              m-0
              focus:text-gray-700 focus:bg-white focus:border-blue-600 focus:outline-none" id="exampleInput126"
              placeholder="Password">
          </div>
          <div class="form-group mb-6">
            <input type="radio" name="role" value="user"> User
            <input type="radio" name="role" value="admin"> Admin
          </div>

          <button type="submit" class="
            w-full
            px-6
            py-2.5
            bg-blue-600
            text-white
            font-medium
            text-xs
            leading-tight
            uppercase
            rounded
            shadow-md
            hover:bg-blue-700 hover:shadow-lg
            focus:bg-blue-700 focus:shadow-lg focus:outline-none focus:ring-0
            active:bg-blue-800 active:shadow-lg
            transition
            duration-150
            ease-in-out">Sign up</button>
        </form>
      </div>
</x-guest-layout>
