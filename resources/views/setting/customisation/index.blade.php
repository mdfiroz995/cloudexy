<x-app-layout>
    <div>
         <main class="flex-1 overflow-x-hidden overflow-y-auto bg-gray-200">
             <div class="container mx-auto px-6 py-1">
               <div class="bg-white shadow-md rounded my-6 p-5">
                 <p class="text-2xl mb-4 font-bold text-gray-800">Theme Setting</p>
                 <form method="POST" action="{{ route('customisation.update',$themes->id)}}" enctype="multipart/form-data">
                   @csrf
                   @method('put')
 
                 {{-- image header --}}

                 <div class="flex text-gray-500 mt-5 mb-5">
                    <div class="bg-white rounded-lg ml-5">
                      <div class="" x-data="imageData()">
                        <div x-show="previewUrl == '' && imgurl == ''">
                          <p class="text-center uppercase text-bold">
                            <label for="thumbnailprev" class="cursor-pointer">
                              Upload Header Logo
                            </label>
                            <input type="file" name="headerlogo" id="thumbnailprev"
                                class="hidden thumbnailprev" @change="updatePreview()">
                          </p>
                        </div>
                        <div x-show="previewUrl !== ''" class="relative w-24 h-24">
                          <img :src="previewUrl" alt="" class="shadow-lg max-w-full h-auto align-middle border-none object-cover">
                          <div class="ml-5">
                            <button type="button" class="" @click="clearPreview()">H Logo</button>
                          </div>
                        </div>

                        <div x-show="imgurl !== ''" class="relative w-24 h-24">
                          <img :src="imgurl" alt="" class="shadow-lg max-w-full h-auto align-middle border-none object-cover">
                          <div class="ml-5">
                            <button type="button" class="" @click="clearPreview()">H Logo</button>
                          </div>
                        </div>

                      </div>
                    </div>

                    <div class="bg-white rounded-lg mx-5">
                        <div class="" x-data="imageData2()">
                          <div x-show="previewUrl == '' && imgurl == ''">
                            <p class="text-center uppercase text-bold">
                              <label for="thumbnailprevfooter" class="cursor-pointer">
                                Upload Footer Logo
                              </label>
                              <input type="file" name="footerlogo" id="thumbnailprevfooter"
                                  class="hidden thumbnailprevfooter" @change="updatePreview()">
                            </p>
                          </div>
                          <div x-show="previewUrl !== ''" class="relative w-24 h-24">
                            <img :src="previewUrl" alt="" class="shadow-lg max-w-full h-auto align-middle border-none object-cover">
                            <div class="ml-5">
                              <button type="button" class="" @click="clearPreview()">F Logo</button>
                            </div>
                          </div>
  
                          <div x-show="imgurl !== ''" class="relative w-24 h-24">
                            <img :src="imgurl" alt="" class="shadow-lg max-w-full h-auto align-middle border-none object-cover">
                            <div class="ml-5">
                              <button type="button" class="" @click="clearPreview()">F Logo</button>
                            </div>
                          </div>
  
                        </div>
                      </div>


                      <div class="bg-white rounded-lg ml-5">
                        <div class="" x-data="imageData5()">
                          <div x-show="previewUrl == '' && imgurl == ''">
                            <p class="text-center uppercase text-bold">
                              <label for="thumbnailprevadminlogo" class="cursor-pointer">
                                Dashbord Logo
                              </label>
                              <input type="file" name="adminlogo" id="thumbnailprevadminlogo"
                                  class="hidden thumbnailprevadminlogo" @change="updatePreview()">
                            </p>
                          </div>
                          <div x-show="previewUrl !== ''" class="relative w-24 h-24">
                            <img :src="previewUrl" alt="" class="shadow-lg max-w-full h-auto align-middle border-none object-cover">
                            <div class="ml-5">
                              <button type="button" class="" @click="clearPreview()">D Logo</button>
                            </div>
                          </div>
  
                          <div x-show="imgurl !== ''" class="relative w-24 h-24">
                            <img :src="imgurl" alt="" class="shadow-lg max-w-full h-auto align-middle border-none object-cover">
                            <div class="ml-5">
                              <button type="button" class="" @click="clearPreview()">D Logo</button>
                            </div>
                          </div>
  
                        </div>
                      </div>
  




                </div>

                 {{-- image header end --}}

                 <div class="flex flex-wrap -mx-3 mb-2 mt-3">
                     <div class="w-full md:w-1/2 px-3 mb-6 md:mb-0">
                       <label class="block tracking-widetext-gray-700 select-none font-medium mb-2" for="grid-first-name">
                        Email
                       </label>
                       <input class="appearance-none block w-full text-gray-700 rounded-lg py-3 px-4 mb-3 leading-tight focus:outline-none focus:bg-white border-gray-300"  id="mail_port"
                         type="email"
                         name="email"
                         value="{{ old('email',$themes->email) }}"
                       >
                     </div>
 
                     <div class="w-full md:w-1/2 px-3">
                       <label class="block tracking-widetext-gray-700 select-none font-medium mb-2" for="grid-last-name">
                         Phone No
                       </label>
                       <input class="appearance-none block w-full text-gray-700 border border-gray-300 rounded-lg py-3 px-4 leading-tight focus:outline-none focus:bg-white focus:border-gray-500"
                         id="phoneno"
                         type="text"
                         name="phoneno"
                         value="{{ old('phoneno',$themes->phoneno) }}"
                       >
                     </div>
                 </div>
 
                 
                 <div class="flex flex-wrap -mx-3 mb-2">
                     <div class="w-full md:w-1/2 px-3 mb-6 md:mb-0">
                       <label class="block tracking-widetext-gray-700 select-none font-medium mb-2" for="grid-first-name">
                         Address 
                       </label>
                       <input class="appearance-none block w-full text-gray-700 rounded-lg py-3 px-4 mb-3 leading-tight focus:outline-none focus:bg-white border-gray-300"  id="mail_password"
                         type="text"
                         name="address"
                         value="{{ old('address',$themes->address) }}"
                       >
                     </div>
 
                     <div class="w-full md:w-1/2 px-3">
                       <label class="block tracking-widetext-gray-700 select-none font-medium mb-2" for="grid-last-name">
                         Facebook Link
                       </label>
                       <input class="appearance-none block w-full text-gray-700 border border-gray-300 rounded-lg py-3 px-4 leading-tight focus:outline-none focus:bg-white focus:border-gray-500"
                         id="facebook"
                         type="url"
                         name="facebook"
                         value="{{ old('facebook',$themes->facebook) }}"
                       >
                     </div>
                 </div>


                 <div class="flex flex-wrap -mx-3 mb-2">
                    <div class="w-full md:w-1/2 px-3 mb-6 md:mb-0">
                      <label class="block tracking-widetext-gray-700 select-none font-medium mb-2" for="grid-first-name">
                        Instagram Link 
                      </label>
                      <input class="appearance-none block w-full text-gray-700 rounded-lg py-3 px-4 mb-3 leading-tight focus:outline-none focus:bg-white border-gray-300"  id="mail_password"
                        type="url"
                        name="instagram"
                        value="{{ old('instagram',$themes->instagram) }}"
                      >
                    </div>

                    <div class="w-full md:w-1/2 px-3">
                      <label class="block tracking-widetext-gray-700 select-none font-medium mb-2" for="grid-last-name">
                        Twitter Link
                      </label>
                      <input class="appearance-none block w-full text-gray-700 border border-gray-300 rounded-lg py-3 px-4 leading-tight focus:outline-none focus:bg-white focus:border-gray-500"
                        id="twitter"
                        type="url"
                        name="twitter"
                        value="{{ old('twitter',$themes->twitter) }}"
                      >
                    </div>
                </div>


                <div class="flex flex-wrap -mx-3 mb-2">
                    <div class="w-full md:w-1/2 px-3 mb-6 md:mb-0">
                      <label class="block tracking-widetext-gray-700 select-none font-medium mb-2" for="grid-first-name">
                        Linkedin Link
                      </label>
                      <input class="appearance-none block w-full text-gray-700 rounded-lg py-3 px-4 mb-3 leading-tight focus:outline-none focus:bg-white border-gray-300"  id="mail_password"
                        type="url"
                        name="linkedin"
                        value="{{ old('linkedin',$themes->linkedin) }}"
                      >
                    </div>

                    <div class="w-full md:w-1/2 px-3">
                      <label class="block tracking-widetext-gray-700 select-none font-medium mb-2" for="grid-last-name">
                        Youtube Link
                      </label>
                      <input class="appearance-none block w-full text-gray-700 border border-gray-300 rounded-lg py-3 px-4 leading-tight focus:outline-none focus:bg-white focus:border-gray-500"
                        id="youtube"
                        type="url"
                        name="youtube"
                        value="{{ old('youtube',$themes->youtube) }}"
                      >
                    </div>
                </div>

                <div class="flex flex-wrap -mx-3 mb-2">
                    <div class="w-full md:w-1/2 px-3 mb-6 md:mb-0">
                      <label class="block tracking-widetext-gray-700 select-none font-medium mb-2" for="grid-first-name">
                        Creative Score 
                      </label>
                      <input class="appearance-none block w-full text-gray-700 rounded-lg py-3 px-4 mb-3 leading-tight focus:outline-none focus:bg-white border-gray-300"  id="mail_password"
                        type="text"
                        name="creative_score"
                        value="{{ old('creative_score',$themes->creative_score ) }}"
                      >
                    </div>

                    <div class="w-full md:w-1/2 px-3">
                      <label class="block tracking-widetext-gray-700 select-none font-medium mb-2" for="grid-last-name">
                        Trackable Score
                      </label>
                      <input class="appearance-none block w-full text-gray-700 border border-gray-300 rounded-lg py-3 px-4 leading-tight focus:outline-none focus:bg-white focus:border-gray-500"
                        id="trackable_score"
                        type="text"
                        name="trackable_score"
                        value="{{ old('trackable_score',$themes->trackable_score) }}"
                      >
                    </div>
                </div>
 
                 <div class="flex flex-wrap -mx-3 mb-2">
                     <div class="w-full md:w-1/2 px-3 mb-6 md:mb-0">
                       <label class="block tracking-widetext-gray-700 select-none font-medium mb-2" for="grid-first-name">
                        Guaranteed Score
                       </label>
                       <input class="appearance-none block w-full text-gray-700 rounded-lg py-3 px-4 mb-3 leading-tight focus:outline-none focus:bg-white border-gray-300"  id="mail_from"
                         type="text"
                         name="guaranteed_score"
                         value="{{ old('guaranteed_score',$themes->guaranteed_score) }}">
                     </div>

                     <div class="w-full md:w-1/2 px-3 mb-6 md:mb-0">
                      <label class="block tracking-widetext-gray-700 select-none font-medium mb-2" for="grid-first-name">
                       Copyright Text
                      </label>
                      <input class="appearance-none block w-full text-gray-700 rounded-lg py-3 px-4 mb-3 leading-tight focus:outline-none focus:bg-white border-gray-300"  id="mail_from"
                        type="text" name="copyright" value="{{ old('copyright',$themes->copyright) }}">
                    </div>
                 </div>
 
                 <div class="text-center mt-16">
                   <button type="submit" class="bg-blue-500 text-white font-bold px-5 py-1 rounded focus:outline-none shadow hover:bg-blue-500 transition-colors ">Update</button>
                 </div>
               </div>
               </form>
             </div>
         </main>
     </div>
 </div>


 <script>
    function imageData() {
        var files = document.getElementById("thumbnailprev").files;
        if(files.length == 0){
            var url = '/logo/'+{!! json_encode($themes->headerlogo) !!};
        }else{
            url = '';
        }
      return {
        previewUrl: "",
        imgurl: url,
        updatePreview() {
          var reader, files = document.getElementById("thumbnailprev").files;
          reader = new FileReader();
          reader.onload = e => {
            this.previewUrl = e.target.result;
          };
          reader.readAsDataURL(files[0]);
        },
        clearPreview() {
          document.getElementById("thumbnailprev").value = null;
          this.previewUrl = "";
          this.imgurl     = "";
        }
      };
    }

</script>



<script>
    function imageData2() {
        var files = document.getElementById("thumbnailprevfooter").files;
        if(files.length == 0){
            var url = '/logo/'+{!! json_encode($themes->footerlogo) !!};
        }else{
            url = '';
        }
      return {
        previewUrl: "",
        imgurl: url,
        updatePreview() {
          var reader, files = document.getElementById("thumbnailprevfooter").files;
          reader = new FileReader();
          reader.onload = e => {
            this.previewUrl = e.target.result;
          };
          reader.readAsDataURL(files[0]);
        },
        clearPreview() {
          document.getElementById("thumbnailprevfooter").value = null;
          this.previewUrl = "";
          this.imgurl     = "";
        }
      };
    }

</script>

<script>
  function imageData5() {
      var files = document.getElementById("thumbnailprevadminlogo").files;
      if(files.length == 0){
          var url = '/logo/'+{!! json_encode($themes->adminlogo) !!};
      }else{
          url = '';
      }
    return {
      previewUrl: "",
      imgurl: url,
      updatePreview() {
        var reader, files = document.getElementById("thumbnailprevadminlogo").files;
        reader = new FileReader();
        reader.onload = e => {
          this.previewUrl = e.target.result;
        };
        reader.readAsDataURL(files[0]);
      },
      clearPreview() {
        document.getElementById("thumbnailprevadminlogo").value = null;
        this.previewUrl = "";
        this.imgurl     = "";
      }
    };
  }

</script>


 </x-app-layout>
 