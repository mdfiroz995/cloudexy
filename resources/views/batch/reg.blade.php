<x-app-layout>
  <main class="flex-1 overflow-x-hidden overflow-y-auto bg-gray-200">
      <div class="container mx-auto px-6 py-2">
        <h2 class="text-center"><b>Register User</b></h2>
        <hr>
        <div class="bg-white shadow-md rounded my-6">
          <table class="text-left w-full border-collapse">
            <thead>
              <tr>
                <th class="py-4 px-6 bg-grey-lightest font-bold text-sm text-grey-dark border-b border-grey-light">S.No</th>

                <th class="py-4 px-6 bg-grey-lightest font-bold text-sm text-grey-dark border-b border-grey-light">Name</th>

                <th class="py-4 px-6 bg-grey-lightest font-bold text-sm text-grey-dark border-b border-grey-light w-2/12">E-mail</th>
                <th class="py-4 px-6 bg-grey-lightest font-bold text-sm text-grey-dark border-b border-grey-light w-2/12">Registeration Date</th>
              </tr>
            </thead>
            <tbody> 
                @foreach($regsiter as $k=>$data)
                    <tr class="hover:bg-grey-lighter">
                    <td class="py-4 px-6 border-b border-grey-light">{{ $k+1 }}</td>
                    <td class="py-4 px-6 border-b border-grey-light">{{ $data->name }}</td>
                    <td class="py-4 px-6 border-b border-grey-light">{{ $data->email }}</td>
                    <td class="py-4 px-6 border-b border-grey-light">{{ $data->created_at }}</td>
                    </tr>
                @endforeach
          </tbody>
      </div>
  </main>
</div>
</x-app-layout>
