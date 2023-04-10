@php
    use Maklad\Permission\Models\Role;
@endphp
   <div wire:ignore.self
                class="rounded-sm border border-stroke bg-white shadow-default dark:border-strokedark dark:bg-boxdark">
                <div class="border-b border-stroke py-4 px-6.5 dark:border-strokedark">
                  <h3 class="font-semibold text-black dark:text-white">
                    Contact Form
                  </h3>
                </div>
                <form wire:submit.prevent="update">
                  <div class="p-6.5">
                    <div class="mb-4.5 flex flex-col gap-12 xl:flex-row">
                      <div class="w-full xl:w-1/2">
                        <label class="mb-2.5 block text-black dark:text-white">
                          Name
                        </label>
                        <input type="text" value=" {{ $one->name }} " 
                          class="w-full rounded border-[1.5px] border-stroke bg-transparent py-3 px-5 font-medium outline-none transition focus:border-primary active:border-primary disabled:cursor-default disabled:bg-whiter dark:border-form-strokedark dark:bg-form-input dark:focus:border-primary" disabled/>
                      </div>

                      <!-- <div class="w-full xl:w-1/2">
                        <label class="mb-2.5 block text-black dark:text-white">
                          Last name
                        </label>
                        <input type="text" placeholder="Enter your last name"
                          class="w-full rounded border-[1.5px] border-stroke bg-transparent py-3 px-5 font-medium outline-none transition focus:border-primary active:border-primary disabled:cursor-default disabled:bg-whiter dark:border-form-strokedark dark:bg-form-input dark:focus:border-primary" />
                      </div> -->
                    </div>

                    <div class="mb-4.5">
                      <label class="mb-2.5 block text-black dark:text-white">
                        Email <span class="text-meta-1">*</span>
                      </label>
                      <input type="email" value= " {{ $one->email }} "
                        class="w-full rounded border-[1.5px] border-stroke bg-transparent py-3 px-5 font-medium outline-none transition focus:border-primary active:border-primary disabled:cursor-default disabled:bg-whiter dark:border-form-strokedark dark:bg-form-input dark:focus:border-primary" disabled/>
                    </div>

                    <!-- <div class="mb-4.5">
                      <label class="mb-2.5 block text-black dark:text-white">
                        Subject
                      </label>
                      <input type="text" placeholder="Select subject"
                        class="w-full rounded border-[1.5px] border-stroke bg-transparent py-3 px-5 font-medium outline-none transition focus:border-primary active:border-primary disabled:cursor-default disabled:bg-whiter dark:border-form-strokedark dark:bg-form-input dark:focus:border-primary" />
                    </div> -->

                    <div class="mb-4.5">
                      <label class="mb-2.5 block text-black dark:text-white">
                        Role
                      </label>
                      <div class="relative z-20 bg-transparent dark:bg-form-input">
                        <select name="roles" id="roles" wire:model="roles"
                          class="relative z-20 w-full appearance-none rounded border border-stroke bg-transparent py-3 px-5 outline-none transition focus:border-primary active:border-primary dark:border-form-strokedark dark:bg-form-input dark:focus:border-primary">
                          @foreach($role_id as $role_id)
                                <option value=" {{$role_id->_id}} " selected>{{$role_id->name}}</option>
                            @endforeach

                          @foreach($rales as $roller)
                          <option value="{{$roller->name}}">{{$roller->name}}</option>
                          @endforeach

                        </select>
                        <span class="absolute top-1/2 right-4 z-30 -translate-y-1/2">
                          <svg class="fill-current" width="24" height="24" viewBox="0 0 24 24" fill="none"
                            xmlns="http://www.w3.org/2000/svg">
                            <g opacity="0.8">
                              <!-- <path fill-rule="evenodd" clip-rule="evenodd"
                                d="M5.29289 8.29289C5.68342 7.90237 6.31658 7.90237 6.70711 8.29289L12 13.5858L17.2929 8.29289C17.6834 7.90237 18.3166 7.90237 18.7071 8.29289C19.0976 8.68342 19.0976 9.31658 18.7071 9.70711L12.7071 15.7071C12.3166 16.0976 11.6834 16.0976 11.2929 15.7071L5.29289 9.70711C4.90237 9.31658 4.90237 8.68342 5.29289 8.29289Z"
                                fill=""></path> -->
                            </g>
                          </svg>
                        </span>
                      </div>
                    </div>

                    <!-- <div class="mb-6">
                      <label class="mb-2.5 block text-black dark:text-white">
                        Message
                      </label>
                      <textarea rows="6" placeholder="Type your message"
                        class="w-full rounded border-[1.5px] border-stroke bg-transparent py-3 px-5 font-medium outline-none transition focus:border-primary active:border-primary disabled:cursor-default disabled:bg-whiter dark:border-form-strokedark dark:bg-form-input dark:focus:border-primary"></textarea>
                    </div> -->

                    <button type="submit" class="flex w-full justify-center rounded bg-primary p-3 font-medium text-gray">
                      Confirm
                    </button>
                  </div>
                </form>
              </div>
            </div>

