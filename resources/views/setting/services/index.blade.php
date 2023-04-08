<x-app-layout>
   <div>
        <main class="flex-1 overflow-x-hidden overflow-y-auto bg-gray-200">
            <div class="container mx-auto px-6 py-2">
              <div class="bg-white shadow-md rounded my-6">
                <table class="text-left w-full border-collapse">
                  <thead>
                    <tr>
                      <th class="py-4 px-6 bg-grey-lightest font-bold text-sm text-grey-dark border-b border-grey-light">Name</th>
                      <th class="py-4 px-6 bg-grey-lightest font-bold text-sm text-grey-dark border-b border-grey-light">Email</th>
                      <th class="py-4 px-6 bg-grey-lightest font-bold text-sm text-grey-dark border-b border-grey-light">Phone</th>
                      <th class="py-4 px-6 bg-grey-lightest font-bold text-sm text-grey-dark border-b border-grey-light">website</th>
                      <th class="py-4 px-6 bg-grey-lightest font-bold text-sm text-grey-dark border-b border-grey-light text-right">Actions</th>
                    </tr>
                  </thead>
                  <tbody>
                    
                    @can('Service access')
                      @foreach($users as $per)
                      <tr class="hover:bg-grey-lighter">
                        <td class="py-4 px-6 border-b border-grey-light">{{ $per->name }}</td>
                        <td class="py-4 px-6 border-b border-grey-light">{{ $per->email }}</td>
                        <td class="py-4 px-6 border-b border-grey-light">{{ $per->phone }}</td>
                        <td class="py-4 px-6 border-b border-grey-light">{{ $per->website }}</td>
                        <td class="py-4 px-6 border-b border-grey-light text-right">

                          @can('Service delete')
                          <form action="{{ route('admin.destroy.services', $per->id) }}" method="POST" class="inline">
                              @csrf
                              @method('put')
                              <button class="text-grey-lighter font-bold py-1 px-3 rounded text-xs bg-blue hover:bg-blue-dark text-red-400"><i class="fas fa-trash-alt"></i></button>
                          </form>
                          @endcan

                        </td>
                      </tr>
                      @endforeach
                    @endcan

                  </tbody>
                </table>
              </div>
  
            </div>
        </main>
    </div>
</div>
</x-app-layout>
