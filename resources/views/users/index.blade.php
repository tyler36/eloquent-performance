<x-layout>
    <div class="overflow-x-auto">
        <form
            action="{{ route('user.index') }}"
            method="GET"
            class="flex space-x-4"
        >
            @csrf()

            <input
                id="search"
                name="search"
                value="{{ old('search') }}"
            >

            <div class="flex space-x-2 justify-center">
                <button
                    type="submit"
                    class="inline-block px-6 py-2.5 bg-blue-600 text-white font-medium text-xs leading-tight uppercase rounded shadow-md hover:bg-blue-700 hover:shadow-lg focus:bg-blue-700 focus:shadow-lg focus:outline-none focus:ring-0 active:bg-blue-800 active:shadow-lg transition duration-150 ease-in-out"
                >Submit</button>
            </div>
        </form>

        <div class="bg-white shadow-md rounded my-6">
            <table class="min-w-max w-full table-auto">
                <thead>
                    <tr class="bg-gray-200 text-gray-600 uppercase text-sm leading-normal">
                        <th class="py-3 px-6 text-left">Name</th>
                        <th class="py-3 px-6 text-left">Email</th>
                        <th class="py-3 px-6 text-center">Company</th>
                        <th class="py-3 px-6 text-center"></th>
                    </tr>
                </thead>
                <tbody class="text-gray-600 text-sm font-light">
                    @foreach ($users as $user)
                        <tr class="border-b border-gray-200 hover:bg-gray-100">
                            <td class="py-3 px-6 text-left whitespace-nowrap">
                                <div class="flex items-center">
                                    <div class="mr-2">
                                        {{ $user->first_name }} {{ $user->last_name }}
                                    </div>
                                </div>
                            </td>
                            <td class="py-3 px-6 text-left">
                                <div class="flex items-center">
                                    {{ $user->email }}
                                </div>
                            </td>
                            <td class="py-3 px-6 text-center">
                                <div class="flex items-center justify-center">
                                    {{ $user->company->name }}
                                </div>
                            </td>
                            <td class="py-3 px-6 text-center">
                                <div class="flex item-center justify-center">
                                    <div class="w-4 mr-2 transform hover:text-purple-500 hover:scale-110">
                                        <svg
                                            xmlns="http://www.w3.org/2000/svg"
                                            fill="none"
                                            viewBox="0 0 24 24"
                                            stroke="currentColor"
                                        >
                                            <path
                                                stroke-linecap="round"
                                                stroke-linejoin="round"
                                                stroke-width="2"
                                                d="M15 12a3 3 0 11-6 0 3 3 0 016 0z"
                                            />
                                            <path
                                                stroke-linecap="round"
                                                stroke-linejoin="round"
                                                stroke-width="2"
                                                d="M2.458 12C3.732 7.943 7.523 5 12 5c4.478 0 8.268 2.943 9.542 7-1.274 4.057-5.064 7-9.542 7-4.477 0-8.268-2.943-9.542-7z"
                                            />
                                        </svg>
                                    </div>
                                    <div class="w-4 mr-2 transform hover:text-purple-500 hover:scale-110">
                                        Edit
                                    </div>
                                </div>
                            </td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>

    {{ $users->links() }}
</x-layout>
