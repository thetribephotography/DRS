<div wire:ignore.self>
        {{-- COMMENT KINI --}}
    <section class="bg-white py-8 lg:py-16">
        <div class="mx-auto max-w-2xl px-4">
            <div class="mb-6 flex items-center justify-between">
                <h2 class="text-lg font-bold text-gray-900 lg:text-2xl">Reply Comment
                    {{-- @if (!count($upload->comments) == 0)
                        ({{ count($upload->comments) }})
                    @endif --}}
                </h2>
            </div>
            <form class="mb-6" wire:submit.prevent="replyComment">
                @csrf
                <div class="mb-4 rounded-lg rounded-t-lg border border-gray-200 bg-white py-2 px-4">
                    <label class="sr-only" for="reply">Your comment</label>
                    <textarea class="w-full border-0 px-0 text-sm text-gray-900 focus:outline-none focus:ring-0" id="reply"
                        name="reply" rows="6" placeholder="Write a comment..." wire:model="reply" required></textarea>
                         @error('comment') <span class="text-red-600">{{ $message }}</span> @enderror
                </div>
                <button
                    class="items-center rounded bg-blue-500 py-2.5 px-4 text-center font-medium text-white hover:bg-blue-800"
                    type="submit">
                    Post comment
                </button>
                <button wire:click="$refresh; $emit('closeModal')">Close Modal</button>
            </form>
        </div>
    </section>
</div>
