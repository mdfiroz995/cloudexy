<x-app-layout>
  <main class="flex-1 overflow-x-hidden overflow-y-auto bg-gray-200">
      <div class="container mx-auto px-6 py-2">
          <div class="text-right">
            <!-- @can('Post create') -->
              <a href="{{route('admin.courses.create')}}" class="bg-blue-500 text-white font-bold px-5 py-1 rounded focus:outline-none shadow hover:bg-blue-500 transition-colors ">Add New Course</a>
            <!-- @endcan -->
          </div>

        <div class="bg-white shadow-md rounded my-6">
          <table class="text-left w-full border-collapse">
            <thead>
              <tr>
                <th class="py-4 px-6 bg-grey-lightest font-bold text-sm text-grey-dark border-b border-grey-light">Course Type</th>
                <th class="py-4 px-6 bg-grey-lightest font-bold text-sm text-grey-dark border-b border-grey-light">Short Description</th>
                <th class="py-4 px-6 bg-grey-lightest font-bold text-sm text-grey-dark border-b border-grey-light">Price</th>

                <th class="py-4 px-6 bg-grey-lightest font-bold text-sm text-grey-dark border-b border-grey-light w-2/12">Status</th>
                <th class="py-4 px-6 bg-grey-lightest font-bold text-sm text-grey-dark border-b border-grey-light text-right w-2/12">Actions</th>
              </tr>
            </thead>
            <tbody> 
            @foreach($course as $post)
                <tr class="hover:bg-grey-lighter">
                  <td class="py-4 px-6 border-b border-grey-light">{{ $post->c_name }}</td>
                  <td class="py-4 px-6 border-b border-grey-light">{{ $post->c_detail }}</td>
                  <td class="py-4 px-6 border-b border-grey-light">{{ $post->c_price }}</td>
                  <td class="py-4 px-6 border-b border-grey-light">
                      @if($post->c_status)
                      <span class="inline-flex items-center justify-center px-2 py-1 mr-2 text-xs font-bold leading-none text-white bg-green-500 rounded-full">Publish</span>
                      @else
                      <span class="inline-flex items-center justify-center px-2 py-1 mr-2 text-xs font-bold leading-none text-white bg-gray-500 rounded-full">Draft</span>
                      @endif
                  </td>
                  <td class="py-4 px-6 border-b border-grey-light text-right">

                    @can('Post edit')
                    <a href="{{route('admin.courses.edit',$post->id)}}" class="text-grey-lighter font-bold py-1 px-3 rounded text-xs bg-green hover:bg-green-dark text-blue-400"><i class="far fa-edit"></i></a>
                    @endcan

                    @can('Post delete')
                    <form action="{{ route('admin.courses.destroy', $post->id) }}" method="POST" class="inline">
                        @csrf
                        @method('delete')
                        <button class="text-grey-lighter font-bold py-1 px-3 rounded text-xs bg-blue hover:bg-blue-dark text-red-400"><i class="far fa-trash-alt"></i></button>
                    </form>
                    @endcan
                  </td>
                </tr>
                @endforeach

          </tbody>
      </div>
  </main>
</div>
</x-app-layout>
