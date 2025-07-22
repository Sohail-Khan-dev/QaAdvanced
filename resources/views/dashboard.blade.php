<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Dashboard') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 text-gray-900">
                    <p class="mb-4">{{ __("You're logged in!") }}</p>

                    <div class="mt-4 p-4 border rounded-lg bg-gray-50">
                        <h3 class="text-lg font-medium mb-2">Account Information</h3>
                        <p><strong>Name:</strong> {{ Auth::user()->name }}</p>
                        <p><strong>Email:</strong> {{ Auth::user()->email }}</p>
                        <p><strong>Role:</strong> {{ Auth::user()->role ? ucfirst(Auth::user()->role->name) : 'No Role' }}</p>
                        <p><strong>Email Verified:</strong>
                            @if(Auth::user()->hasVerifiedEmail())
                                <span class="text-green-600 font-medium">Yes</span>
                            @else
                                <span class="text-red-600 font-medium">No</span>
                                <form method="POST" action="{{ route('verification.send') }}" class="inline ml-2">
                                    @csrf
                                    <button type="submit" class="text-sm text-blue-600 underline">
                                        {{ __('Resend verification email') }}
                                    </button>
                                </form>
                            @endif
                        </p>
                    </div>

                    @if(Auth::user()->isAdmin())
                    <div class="mt-6">
                        <h3 class="text-lg font-medium mb-4">Admin Tools</h3>
                        <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-4">
                            <a href="{{ route('admin.users.index') }}" class="block p-6 bg-white border rounded-lg shadow hover:bg-gray-50">
                                <h5 class="mb-2 text-xl font-medium">User Management</h5>
                                <p class="text-gray-600">Manage users, roles, and approve managers</p>
                            </a>
                        </div>
                    </div>
                    @endif
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
