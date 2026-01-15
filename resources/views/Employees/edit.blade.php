<x-app-layout>
    <div class="min-h-screen bg-gray-50 py-10 mt-8">
        <div class="max-w-xl mx-auto bg-white rounded-xl shadow-lg p-8">
            <h2 class="text-2xl font-semibold text-gray-800 mb-6 text-center">
                Edit employee
            </h2>
              <form action="/employee_update/{{ $emp->id }}" method="POST" class="space-y-5">
                  @csrf
                  @method('PUT')
                  <div>
                      <label class="block text-sm font-medium text-gray-700 mb-1">
                          Name
                      </label>
                      <input type="text" name="name" value="{{ $emp->name }}"
                          class="w-full rounded-md border-gray-300 px-4 py-2
                              focus:border-blue-500 focus:ring-blue-500">
                  </div>
                  <div>
                      <label class="block text-sm font-medium text-gray-700 mb-1">
                          Email
                      </label>
                      <input type="email" name="email" value="{{ $emp->email }}"rows="4"
                          class="w-full rounded-md border-gray-300 px-4 py-2
                              focus:border-blue-500 focus:ring-blue-500">

                  </div>
                  <div>
                      <label class="block text-sm font-medium text-gray-700 mb-1">
                          Position
                      </label>
                      <input type="text" name="position" value="{{ $emp->position }}"
                          class="w-full rounded-md border-gray-300 px-4 py-2
                              focus:border-blue-500 focus:ring-blue-500">
                  </div>
                  <button
                      class="w-32 bg-blue-600 text-white font-medium
                              p-2.5 rounded-lg
                              hover:bg-blue-700
                              transition duration-200">
                      Update Employee 
                  </button>
              </form>
        </div>
    </div>
</x-app-layout>