<div class="elementor elementor-130">
    
    <x-headerPart />

    <section class="elementor-section elementor-top-section elementor-element elementor-element-2367b4d8 elementor-section-boxed elementor-section-height-default elementor-section-height-default" data-id="2367b4d8" data-element_type="section" data-settings="{&quot;background_background&quot;:&quot;classic&quot;}">
        <div class="elementor-container elementor-column-gap-no">
            <div class="elementor-column elementor-col-100 elementor-top-column elementor-element elementor-element-3a850d80" data-id="3a850d80" data-element_type="column">
                <div class="elementor-widget-wrap elementor-element-populated">
                    <div class="elementor-element elementor-element-7aa80cab elementor-widget elementor-widget-rhea-ultra-search-form-widget" data-id="7aa80cab" data-element_type="widget" data-settings="{&quot;rhea_top_field_count&quot;:&quot;5&quot;}" data-widget_type="rhea-ultra-search-form-widget.default">
                        <div class="elementor-widget-container">
                            <div class="rhea_ultra_search_form_wrapper rhea-search-form-1" id="rhea-7aa80cab" style="display: block;">
                                    <div class="rhea-ultra-search-form-fields">
                                        <div class="rhea-ultra-search-form-inner">
                                            <div class="rhea_top_search_fields">
                                                <div class="rhea_top_search_box rhea_top_fields_count_5" id="top-7aa80cab">
                                                    <div class="rhea_prop_search__option rhea_prop_locations_field rhea_location_prop_search_0 rhea-ultra-field-separator location-separator_0 rhea_prop_search__select" style="order: 3" data-key-position="3" data-get-location-placeholder="All Main Locations">
                                                        <span class="rhea_prop_search__selectwrap ">
                                                            <div class="dropdown bootstrap-select show-tick rhea_multi_select_picker_location bs3" style="width: 100%;"><select id="7aa80cablocation" class="rhea_multi_select_picker_location show-tick" data-size="5.5" data-none-results-text="No results matched{0}" data-none-selected-text="All Main Locations" data-live-search="true" data-max-options="1" name="location[]" tabindex="-98">
                                                                <option value="any" selected="selected">All Main Locations</option>
                                                                    @if ($cities->isNotEmpty()) @foreach ($cities as $city)
                                                                        <option>
                                                                        {{ $city->name}}
                                                                            {{-- @if ($city->sub_category->isNotEmpty())
                                                                                <select>
                                                                                    @foreach ($city->sub_category as $areaName)
                                                                                        <option><a class="dropdown-item nav-link" href="{{ route('front.shop',[$city->slug,$areaName->slug])}}">{{ $areaName->name }}</a></option>
                                                                                    @endforeach
                                                                                </select>
                                                                            @endif --}}
                                                                        </option>
                                                                        @endforeach 
                                                                    @endif
                                                                            </select>
                                                                            <button type="button" class="btn dropdown-toggle btn-default" data-toggle="dropdown" role="combobox" aria-owns="bs-select-6" aria-haspopup="listbox" aria-expanded="false" data-id="7aa80cablocation" title="All Main Locations"><div class="filter-option"><div class="filter-option-inner"><div class="filter-option-inner-inner">All Main Locations</div></div> </div><span class="bs-caret"><span class="caret"></span></span></button><div class="dropdown-menu open" style="overflow: hidden;"><div class="bs-searchbox"><input type="search" class="form-control" autocomplete="off" role="combobox" aria-label="Search" aria-controls="bs-select-6" aria-autocomplete="list" aria-activedescendant="bs-select-6-0"></div><div class="inner open" role="listbox" id="bs-select-6" tabindex="-1" style="overflow-y: auto;"><ul class="dropdown-menu inner " role="presentation" style="margin-top: 0px; margin-bottom: 0px;"><li class="selected active"><a role="option" id="bs-select-6-0" tabindex="0" aria-setsize="5" aria-posinset="1" class="active selected" aria-selected="true"><span class="fas fa-check check-mark"></span><span class="text">All Main Locations</span></a></li><li><a role="option" id="bs-select-6-1" tabindex="0"><span class="fas fa-check check-mark"></span><span class="text">Coral Gables</span></a></li><li><a role="option" id="bs-select-6-2" tabindex="0"><span class="fas fa-check check-mark"></span><span class="text">Doral</span></a></li><li><a role="option" id="bs-select-6-3" tabindex="0"><span class="fas fa-check check-mark"></span><span class="text">Little Havana</span></a></li><li><a role="option" id="bs-select-6-4" tabindex="0"><span class="fas fa-check check-mark"></span><span class="text">Miami</span></a></li>
                                                                        </ul>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </span>
                                                    </div>
                                                    <div class="rhea_prop_search__option rhea_prop_search__select rhea_status_field rhea-ultra-field-separator rhea-status-tabs-7aa80cab" style="order: 2" data-key-position="2" id="status-7aa80cab">
                                                        <ul class="rhea-ultra-tabs-list">
                                                            <li class="rhea-ultra-tab">
                                                                <label class="rh-ultra-search-field-label">
                                                                    <input checked="" type="radio" name="status[]" value="any">
                                                                    <span class="rhea-ultra-tab-name">All </span>
                                                                </label>
                                                            </li>
                                                            <li class="rhea-ultra-tab">
                                                                <label class="rh-ultra-search-field-label tab-for-rent">
                                                                    <input type="radio" name="status[]" value="for-rent">
                                                                    <span class="rhea-ultra-tab-name">For Rent</span>
                                                                </label>
                                                            </li>
                                                            <li class="rhea-ultra-tab">
                                                                <label class="rh-ultra-search-field-label tab-for-sale">
                                                                    <input type="radio" name="status[]" value="for-sale">
                                                                    <span class="rhea-ultra-tab-name">For Sale</span>
                                                                </label>
                                                            </li>
                                                        </ul>
                                                    </div>
                                                </div>
                                            </div>

                                    <div class="rhea_collapsed_search_fields rhea_advance_fields_collapsed" id="collapsed_wrapper_7aa80cab">
                                        <div class="rhea_collapsed_search_fields_inner" id="collapsed-7aa80cab">
                                            <div style="order: 6" class="rhea_prop_search__option rhea_price_slider_field rhea_price_range_on_top" id="price-slider-7aa80cab" data-key-position="6">
                                                <input name="min-price" type="hidden" value="" class="rhea_slider_value rhea_min_value" data-index="0">
                                                <input name="max-price" type="hidden" value="" class="rhea_slider_value rhea_max_value" data-index="1">

                                                <div class="rhea_price_slider_wrapper">
                                                    <div class="rhea_price_label">Price Range</div>
                                                    <div class="rhea_price_slider ui-slider ui-corner-all ui-slider-horizontal ui-widget ui-widget-content">
                                                        <div class="ui-slider-range ui-corner-all ui-widget-header" style="left: 0%; width: 100%;"></div><span tabindex="0" class="ui-slider-handle ui-corner-all ui-state-default" style="left: 0%;"></span><span tabindex="0" class="ui-slider-handle ui-corner-all ui-state-default" style="left: 100%;"></span></div>
                                                        <div class="rhea_price_range">From <span class="rhea_price_display rhea_min_slide" data-index="0">$2,500</span> To <span class="rhea_price_display rhea_max_slide" data-index="1">$6,950,000</span></div>
                                                    </div>
                                                </div>
                                                <div class="rhea_prop_search__option rhea_prop_search__select rhea_min_baths_field rhea-ultra-field-separator" data-key-position="7" style="order: 7">
                                                    <span class="rhea_prop_search__selectwrap "></span>
                                                </div>
                                            </div>
                                        </div>
                                    </div>                    
                                </div>                            
                            </div>        
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <div class="single-item">
        @if ($carousal->isNotEmpty()) 
            @foreach ($carousal as $value)
                <x-carousal :value="$value" />        
            @endforeach 
        @endif
    </div>


<section class="elementor-section elementor-top-section elementor-element elementor-element-2072ba6b elementor-section-boxed elementor-section-height-default elementor-section-height-default" >
    <div class="container">
        <div class=" elementor-widget-heading">
            <h2>Discover Latest Properties</h2>		
        </div>
        <p>Newest Properties Around You</p>		
    
        <div class="latestProperties" >
            @if ($latestProperties->isNotEmpty()) 
                @foreach ($latestProperties as $value)
                    <x-latestProperty :value="$value" />        
                @endforeach 
            @endif
        </div>
    </div>   
</section>

<x-developers />
<x-finding />


<div class="container">
    <div class="row pb-3">
        @if ($properties->isNotEmpty()) 
            @foreach ($properties as $value)
                <a href="{{ route('front.product',$value->slug) }}" class="product-img">{{ $value->name }}</a>
            @endforeach 
        @endif
    </div>
</div>

<script>
    $(document).ready(function(){    
            $("#category").change(function(){
                var category_id = $(this).val();
                $.ajax({
                    url: '{{ route("area") }}',
                    type: 'get',
                    data: {category_id:category_id},
                    dataType: 'json',
                    success: function(response) {
                        $("#sub_category").find("option").not(":first").remove();
                        $.each(response["subCategories"],function(key,item){
                            $("#sub_category").append(`<option value='${item.id}' >${item.name}</option>`)
                        })
                    },
                    error: function(){
                        console.log("Something went wrong")
                    }
                });
            })          
        });
</script>
</div>