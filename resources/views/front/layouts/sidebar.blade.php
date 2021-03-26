<div class="cartsy-layout with-sidebar " style="background-color: #f9f9f9">
<div class="cartsy-layout-sidebar template-dropdown">
   <div class="cartsy-layout-sidebar-head">
      <div>
         Categories                            <!-- <span class="cartsy-category-clear">Clear</span> -->
      </div>
      <div class="cartsy-layout-sidebar-close">
         <svg xmlns="http://www.w3.org/2000/svg" width="18" height="18" viewBox="0 0 18 18">
            <path d="M6.572,4.87a1.2,1.2,0,0,0-1.7,1.7l6.947,6.947L4.87,20.465a1.2,1.2,0,1,0,1.7,1.7l6.946-6.946,6.946,6.946a1.2,1.2,0,0,0,1.7-1.7l-6.946-6.946,6.947-6.947a1.2,1.2,0,0,0-1.7-1.7l-6.946,6.947Z" transform="translate(-4.518 -4.518)" fill="currentColor"></path>
         </svg>
      </div>
   </div>
   <div class="cartsy-layout-sidebar-scroll os-host os-theme-dark os-host-overflow os-host-overflow-y os-host-resize-disabled os-host-scrollbar-horizontal-hidden os-host-transition">
      <div class="os-resize-observer-host observed">
         <div class="os-resize-observer" style="left: 0px; right: auto;">
         </div>
      </div>
      <div class="os-size-auto-observer observed" style="height: calc(100% + 1px); float: left;">
         <div class="os-resize-observer"></div>
      </div>
      <div class="os-content-glue" style="margin: 0px; width: 339px; height: 191px;"></div>
      <div class="os-padding">
         <div class="os-viewport os-viewport-native-scrollbars-invisible" style="overflow-y: scroll;">
            <div class="os-content" style="padding: 0px; height: 100%; width: 100%;">
               <div class="cartsy-layout-sidebar-inner " style="">


					@foreach($datas as $category)
                  <div class="cartsy-category-dropdown">
                     <div class="cartsy-category-dropdown-title">
                        <label>
                        <input type="radio" value="fresh-vegetables" name="product-category">
                        <span class="thumb">
                        <img src="{{asset('front/sitedata/Fresh-Vegetables.svg')}}" alt="Fresh Vegetables">
                        </span>
                        <span class="name">{{$category->name}}</span>
                        </label>
                        <span class="cartsy-category-dropdown-open">
                        <i class="ion ion-ios-arrow-down"></i>
                        </span>
                     </div>
					  <!-- Parent Category -->
					 @if($category->subcategories->count()>0)
					<div class="cartsy-category-dropdown-content">
					 @foreach($category->subcategories as $subcategory)
                        <label class="cartsy-product-dropdown-category">
                        <input type="radio" value="{{$subcategory->id}}" name="product-category" class="custom_form_radio">
                        {{$subcategory->sub_name}}
                        </label>
						@endforeach
                     </div>
					  <!-- Child Category wrapper -->
					 
					 @endif
                    
                  </div>
					@endforeach


               </div>
            </div>
         </div>
         <div class="os-scrollbar os-scrollbar-horizontal os-scrollbar-unusable os-scrollbar-auto-hidden">
            <div class="os-scrollbar-track os-scrollbar-track-off">
               <div class="os-scrollbar-handle" style="width: 100%; transform: translate(0px, 0px);"></div>
            </div>
         </div>
         <div class="os-scrollbar os-scrollbar-vertical os-scrollbar-auto-hidden">
            <div class="os-scrollbar-track os-scrollbar-track-off">
               <div class="os-scrollbar-handle" style="height: 29.5385%; transform: translate(0px, 0px);"></div>
            </div>
         </div>
         <div class="os-scrollbar-corner"></div>
      </div>
   </div>
   <!-- Child Category wrapper -->
</div>
<!-- Category Dropdown -->