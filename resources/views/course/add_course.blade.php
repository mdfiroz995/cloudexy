<x-app-layout>
    <div>

        <main class="flex-1 overflow-x-hidden overflow-y-auto bg-gray-200">
            <div class="container mx-auto px-6 py-1 pb-16">
                <div class="bg-white shadow-md rounded my-6 p-5">
                    <form method="POST" action="{{ route('admin.courses.store') }}" enctype="multipart/form-data">
                        @csrf
                        <div class="flex flex-col space-y-2">
                            <label for="title" class="text-gray-700 select-none font-medium">Image</label>
                            <input id="c_img" type="file" name="c_img" value=""
                                placeholder="Choose a file"
                                class="px-4 py-2 rounded-lg border border-gray-300 focus:outline-none focus:ring-2 focus:ring-gray-200" />
                        </div>
                        <div class="flex flex-col space-y-2 mt-2">
                            <label for="title" class="text-gray-700 select-none font-medium">Name</label>
                            <input id="c_name" type="text" name="c_name" value=""
                                placeholder="Course Name"
                                class="px-4 py-2 rounded-lg border border-gray-300 focus:outline-none focus:ring-2 focus:ring-gray-200" />
                        </div>
                        <div class="flex flex-col space-y-2 mt-2">
                            <label for="title" class="text-gray-700 select-none font-medium">Short Description</label>
                            <input id="c_detail" type="text" name="c_detail" value=""
                                placeholder="Detail"
                                class="px-4 py-2 rounded-lg border border-gray-300 focus:outline-none focus:ring-2 focus:ring-gray-200" />
                        </div>
                        <div class="flex flex-col space-y-2 mt-2">
                            <label for="title" class="text-gray-700 select-none font-medium">Price</label>
                            <input id="c_price" type="number" name="c_price" value=""
                                placeholder="Course Detail"
                                class="px-4 py-2 rounded-lg border border-gray-300 focus:outline-none focus:ring-2 focus:ring-gray-200" />
                        </div>
                        <h3 class="text-xl my-4 text-gray-600 mt-2">Active / Deactive</h3>
                        <div class="grid grid-cols-3 gap-4">
                            <div class="relative inline-flex">
                                <svg class="w-2 h-2 absolute top-0 right-0 m-4 pointer-events-none"
                                    xmlns="http://www.w3.org/2000/svg" viewBox="0 0 412 232">
                                    <path
                                        d="M206 171.144L42.678 7.822c-9.763-9.763-25.592-9.763-35.355 0-9.763 9.764-9.763 25.592 0 35.355l181 181c4.88 4.882 11.279 7.323 17.677 7.323s12.796-2.441 17.678-7.322l181-181c9.763-9.764 9.763-25.592 0-35.355-9.763-9.763-25.592-9.763-35.355 0L206 171.144z"
                                        fill="#648299" fill-rule="nonzero" />
                                </svg>
                                <select
                                    class="border border-gray-300 rounded-full text-gray-600 h-10 pl-5 pr-10 bg-white hover:border-gray-400 focus:outline-none appearance-none"
                                    name="c_status">
                                    <option value="0">Deactive</option>
                                    <option value="1">Active</option>
                                </select>
                            </div>
                        </div>

                        <script>
                            CKEDITOR.replace( 'long_description' );
                        </script>

                        
                        <div class="text-center mt-16 mb-16">
                            <button type="submit"
                                class="bg-blue-500 text-white font-bold px-5 py-1 rounded focus:outline-none shadow hover:bg-blue-500 transition-colors ">Submit</button>
                        </div>
                </div>


            </div>
        </main>
    </div>
    </div>
</x-app-layout>
