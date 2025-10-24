<x-layout>
    <x-slot:heading>
        <div class="bg-gradient-to-r from-green-400 to-teal-500 text-white text-3xl font-bold p-4 rounded-xl shadow-lg text-center">
            ➕ Yangi Talaba Qo'shish
        </div>
    </x-slot:heading>
    @if (session('success'))
        <div class="max-w-xl mx-auto mt-4 p-4 text-sm text-green-700 bg-green-100 rounded-xl shadow-md border border-green-200" role="alert">
            <span class="font-medium">Tabriklaymiz!</span> {{ session('success') }}
        </div>
    @endif

    <div class="max-w-xl mx-auto mt-8 bg-white p-10 shadow-2xl rounded-2xl border border-gray-200">
        
        <form method="POST" action="/students">
            @csrf  {{-- CSRF himoyasi --}}

            <div class="space-y-6">
                
               {{-- NAME --}}
           <div>
    <label for="name" class="block text-sm font-medium leading-6 text-gray-900">Name</label>
    <div class="mt-2">
        <input type="text" name="name" id="name" required
               class="block w-full rounded-md border-0 py-1.5 text-gray-900 shadow-sm ring-1 ring-inset 
                      {{-- 💡 Xato bo'lsa, qizil ramka qo'shish --}}
                      {{ $errors->has('name') ? 'ring-red-500' : 'ring-gray-300' }} 
                      placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-indigo-600 sm:text-sm sm:leading-6"
               value="{{ old('name') }}">
    </div>
    {{-- 💡 Name uchun xatolikni chiqarish --}}
    @error('name') 
        <p class="mt-2 text-sm text-red-600 font-medium">{{ $message }}</p> 
    @enderror
</div>

                {{-- LASTNAME --}}
<div>
    <label for="lastname" class="block text-sm font-medium leading-6 text-gray-900">Lastname</label>
    <div class="mt-2">
        <input type="text" name="lastname" id="lastname" required
               class="block w-full rounded-md border-0 py-1.5 text-gray-900 shadow-sm ring-1 ring-inset 
                      {{-- 💡 Xato bo'lsa, qizil ramka qo'shish --}}
                      {{ $errors->has('lastname') ? 'ring-red-500' : 'ring-gray-300' }}
                      placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-indigo-600 sm:text-sm sm:leading-6"
               value="{{ old('lastname') }}">
    </div>
    {{-- 💡 Lastname uchun xatolikni chiqarish --}}
    @error('lastname') 
        <p class="mt-2 text-sm text-red-600 font-medium">{{ $message }}</p> 
    @enderror
</div>
                
                <!-- {{-- EMAIL --}}
                <div>
                    <label for="email" class="block text-sm font-medium leading-6 text-gray-900">Email (Optional)</label>
                    <div class="mt-2">
                        <input type="email" name="email" id="email" 
                               class="block w-full rounded-md border-0 py-1.5 text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-indigo-600 sm:text-sm sm:leading-6"
                               value="{{ old('email') }}">
                    </div>
                    @error('email') <p class="mt-2 text-sm text-red-600">{{ $message }}</p> @enderror
                </div>

                {{-- PHONE --}}
                <div>
                    <label for="phone" class="block text-sm font-medium leading-6 text-gray-900">Phone (Optional)</label>
                    <div class="mt-2">
                        <input type="text" name="phone" id="phone" 
                               class="block w-full rounded-md border-0 py-1.5 text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-indigo-600 sm:text-sm sm:leading-6"
                               value="{{ old('phone') }}">
                    </div>
                    @error('phone') <p class="mt-2 text-sm text-red-600">{{ $message }}</p> @enderror
                </div>

                {{-- ADDRESS --}}
                <div>
                    <label for="address" class="block text-sm font-medium leading-6 text-gray-900">Address (Optional)</label>
                    <div class="mt-2">
                        <input type="text" name="address" id="address" 
                               class="block w-full rounded-md border-0 py-1.5 text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-indigo-600 sm:text-sm sm:leading-6"
                               value="{{ old('address') }}">
                    </div>
                    @error('address') <p class="mt-2 text-sm text-red-600">{{ $message }}</p> @enderror
                </div>
            </div> -->

            <div class="mt-8 flex justify-end gap-x-4">
                <a href="/students" class="rounded-md bg-gray-500 px-3 py-2 text-sm font-semibold text-white shadow-sm hover:bg-gray-600 transition">
                    Bekor qilish
                </a>
                <button type="submit" class="rounded-md bg-indigo-600 px-3 py-2 text-sm font-semibold text-white shadow-md hover:bg-indigo-500 transition">
                    Saqlash
                </button>
            </div>
        </form>
    </div>
</x-layout>