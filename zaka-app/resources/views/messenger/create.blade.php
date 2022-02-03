<x-app-layout>
    <x-slot name="header">
        <h2 class="text-xl font-semibold leading-tight text-gray-800">
            {{ __('Create new message') }}
        </h2>
    </x-slot>
<center>
    <div class="py-12">
        <div class="mx-auto max-w-7xl sm:px-6 lg:px-8">
            <div class="overflow-hidden bg-white shadow-sm sm:rounded-lg">
                <div class="p-6 bg-white border-b border-gray-200">

                    <form action="{{ route('messages.store') }}" method="post">
                        {{ csrf_field() }}
                        <div class="col-md-6">
                            <!-- Subject Form Input -->
                            <div>
                                <x-label for="subject" :value="__('محتوي الرساله')" />
                                <x-input id="subject" class="block w-full mt-1" type="text" name="subject"
                                    :value="old('subject')" style=" text-align:right;" />
                            </div>

                            <!-- Recipients list -->
                            <div class="mt-4">
                                <x-label for="recipient" :value="__(' اختر المرسل اليه')" />
                                <select name="recipient"
                                    class="block w-full mt-1 border-gray-300 rounded-md shadow-sm focus:border-indigo-300 focus:ring focus:ring-indigo-200 focus:ring-opacity-50" style=" text-align:right;">
                                    @foreach ($users as $user)
                                        <option value="{{ $user->id }}">{{ $user->name }}</option>
                                    @endforeach
                                </select>
                            </div>

                            <!-- Message Form Input -->
                            <div class="mt-4">
                                <x-label for="message" :value="__('تعليق')" />
                                <input name="message" rows="10"
                                    class="block w-full mt-1 border-gray-300 rounded-md shadow-sm focus:border-indigo-300 focus:ring focus:ring-indigo-200 focus:ring-opacity-50" style=" text-align:right;">{{ old('message') }}</ه>
                            </div>

                            <!-- Submit Form Input -->
                            <div class="mt-4">
                                <x-button>حفظ</x-button>
                            </div>
                        </div>
                    </form>

                </div>
            </div>
        </div>
    </div>
</center>
</x-app-layout>
