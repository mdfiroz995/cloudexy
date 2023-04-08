<x-app-layout>
    <div>
        <main class="flex-1 overflow-x-hidden overflow-y-auto bg-gray-200">
            <div class="container mx-auto px-6 py-1 pb-16">
                <div class="bg-white shadow-md rounded my-6 p-5">
                    <form method="POST" action="{{route('admin.test.update',$test->id)}}" enctype="multipart/form-data">
                        @csrf
                        @method('put')
                        <div class="flex flex-col space-y-2">
                            <div class="flex text-gray-500 mt-5 mb-5">
                                <div class="bg-white rounded-lg ml-5">
                                    <div class="" x-data="imageData4()">
                                        <div x-show="previewUrl == '' && imgurl == ''">
                                            <p class="text-center uppercase text-bold">
                                                <label for="thumbnailprevtest" class="cursor-pointer">
                                                    Change Image
                                                </label>
                                                <input type="file" name="testimg" id="thumbnailprevtest"
                                                    class="hidden thumbnailprevtest" @change="updatePreview()">
                                            </p>
                                        </div>
                                        <div x-show="previewUrl !== ''" class="relative w-24 h-24">
                                            <img :src="previewUrl" alt=""
                                                class="shadow-lg max-w-full h-auto align-middle border-none object-cover">
                                            <div class="ml-5">
                                                <button type="button" class="" @click="clearPreview()"></button>
                                            </div>
                                        </div>

                                        <div x-show="imgurl !== ''" class="relative w-24 h-24">
                                            <img :src="imgurl" alt=""
                                                class="shadow-lg max-w-full h-auto align-middle border-none object-cover">
                                            <div class="ml-5">
                                                <button type="button" class=""
                                                    @click="clearPreview()">Image</button>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="flex flex-col space-y-2">
                            <label for="name" class="text-gray-700 select-none font-medium">Name</label>
                            <input id="name" type="text" name="name" placeholder="Testimonial Name" value="{{ old('name',$test->name) }}"
                                class="px-4 py-2 rounded-lg border border-gray-300 focus:outline-none focus:ring-2 focus:ring-gray-200" />
                        </div>

                        <div class="flex flex-col space-y-2">
                            <label for="message" class="text-gray-700 select-none font-medium">Message</label>
                            <input id="message" type="text" name="message" value="{{ old('message',$test->message) }}"
                                placeholder="Testimonial Message"
                                class="px-4 py-2 rounded-lg border border-gray-300 focus:outline-none focus:ring-2 focus:ring-gray-200" />
                        </div>

                        <div class="flex flex-col space-y-2">
                            <label for="designation" class="text-gray-700 select-none font-medium">Designation</label>
                            <input id="designation" type="text" name="designation" value="{{ old('designation',$test->designation) }}"
                                placeholder="Testimonial Designation"
                                class="px-4 py-2 rounded-lg border border-gray-300 focus:outline-none focus:ring-2 focus:ring-gray-200" />
                        </div>

                        <div class="text-center mt-16 mb-16">
                            <button type="submit" class="bg-blue-500 text-white font-bold px-5 py-1 rounded focus:outline-none shadow hover:bg-blue-500 transition-colors ">Update</button>
                        </div>
                </div>
            </div>
        </main>
    </div>
    </div>

    <script>
        function imageData4() {
            var files = document.getElementById("thumbnailprevtest").files;
            if (files.length == 0) {
                var url = '/Testimonial_Images/' + {!! json_encode($test->testimg) !!};
            } else {
                url = '';
            }
            return {
                previewUrl: "",
                imgurl: url,
                updatePreview() {
                    var reader, files = document.getElementById("thumbnailprevtest").files;
                    reader = new FileReader();
                    reader.onload = e => {
                        this.previewUrl = e.target.result;
                    };
                    reader.readAsDataURL(files[0]);
                },
                clearPreview() {
                    document.getElementById("thumbnailprevtest").value = null;
                    this.previewUrl = "";
                    this.imgurl = "";
                }
            };
        }
    </script>
</x-app-layout>
