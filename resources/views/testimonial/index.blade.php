<x-app-layout>
  <main class="flex-1 overflow-x-hidden overflow-y-auto bg-gray-200">
      <div class="container mx-auto px-6 py-2">
          <div class="text-right">
            @can('Testimonial create')
              <a href="{{route('admin.test.create')}}" class="bg-blue-500 text-white font-bold px-5 py-1 rounded focus:outline-none shadow hover:bg-blue-500 transition-colors ">Add Member</a>
            @endcan
          </div>

        <div class="bg-white shadow-md rounded my-6">
          <table class="text-left w-full border-collapse">
            <thead>
              <tr>
                <th class="py-4 px-6 bg-grey-lightest font-bold text-sm text-grey-dark border-b border-grey-light">Name</th>
                <th class="py-4 px-6 bg-grey-lightest font-bold text-sm text-grey-dark border-b border-grey-light">Message</th>
                <th class="py-4 px-6 bg-grey-lightest font-bold text-sm text-grey-dark border-b border-grey-light w-2/12">Designation</th>
                <th class="py-4 px-6 bg-grey-lightest font-bold text-sm text-grey-dark border-b border-grey-light text-right w-2/12">Actions</th>
              </tr>
            </thead>
            <tbody>
              @can('Testimonial access')
                @foreach($tests as $test)
                <tr class="hover:bg-grey-lighter">
                  <td class="py-4 px-6 border-b border-grey-light">{{ $test->name }}</td>
                  <td class="py-4 px-6 border-b border-grey-light">{{ $test->message }}</td>
                  <td class="py-4 px-6 border-b border-grey-light">{{ $test->designation}}</td>
                  <td class="py-4 px-6 border-b border-grey-light text-right">
                    @can('Testimonial edit')
                    <a href="{{route('admin.test.edit',$test->id)}}" class="text-grey-lighter font-bold py-1 px-3 rounded text-xs bg-green hover:bg-green-dark text-blue-400"><i class="far fa-edit"></i></a>
                    @endcan

                    @can('Testimonial delete')
                    <form action="{{ route('admin.test.destroy', $test->id) }}" method="POST" class="inline">
                        @csrf
                        @method('delete')
                        <button class="text-grey-lighter font-bold py-1 px-3 rounded text-xs bg-blue hover:bg-blue-dark text-red-400"><i class="far fa-trash-alt"></i></button>
                    </form>
                    @endcan
                  </td>
                </tr>
                @endforeach
                @endcan
            </tbody>
          </table>

          @can('Testimonial access')
          <div class="text-right p-4 py-10">
            {{-- {{ $tests->links() }} --}}
          </div>
          @endcan
        </div>

      </div>
  </main>
</div>
</x-app-layout>
