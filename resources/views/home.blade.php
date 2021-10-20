<x-layout>
  <x-slot name="title">
    Home
  </x-slot>
  <x-slot name="content">
   <div class="mt-5">
	   <div class="text-center">
		<img src="{{asset('images/avtar.jpg')}}" alt="" class="img-thumbnail mt-4"height="100px"width="200px"/>
	   </div>
	   <div class="text-white text-justify mt-4 mx=5">
	    <h1 class="text-white st-font">Hello,</h1>
	   </div>
	   <div class="text-white">
	     <p class="st-font text-info">Vivek kumar</p>
			If you wish to write a will, or amend an existing will to ensure your estate is distributed according to your wishes after you die, our expert will writing solicitors are here to help.

		    Our award-winning solicitors based across Yorkshire are on hand to guide you through the will writing process, giving you the peace of mind that your family and loved ones will be provided for after you die. We are widely regarded for our high standards of service, and will do our utmost to ensure that your specific requirements are met.

		    If a will is not drafted properly, the document can be deemed invalid and have no legal effect, which means your estate may not pass to who you want it to. We can provide practical legal guidance in simple terms, helping you to make sense of this often complicated legal process.
	 </div>
	 <div class="text-center">
	 <a herf="{{route('contact')}}"class="btn btn-outline-warning">Hire me</a>
	 <a herf="{{route('contact')}}"class="btn btn-outline-info mx-5 my-5">Contact me</a>
	 </div>
   </div>
  </x-slot>
</x-layout>