<div>
</head>
<body>
<div class="full-wd">
   <h3 class="create-accident-title">Νέα Εγγραφή [ΟΔΟΣ]</h3>

   <form wire:submit.prevent='save' class="data-input-form">
    @csrf
    {{-- @if($step == 0) --}}
        @error('general')
            <div class="block error"> <h3> {{ $message }} </h3> </div>
        @enderror
        <div class="form-category"> <!-- FORM CATEGORY START-->
            <div class="form-group s100-100">
                <label for="accident_id">id</label>
                <select name="accident_id" wire:model="accident_id">
                    <option value="0">Επιλέξτε...</option>

                    @foreach ($id as $ids )
                        <option value="{{$ids->id}}">{{$ids->id}} | {{ $ids->accidentCase }}</option>
                    @endforeach
                </select>
                @error('accident_id')
                <small class="error">{{$message}}</small>
                @enderror
            </div>


            <div class="form-group s100-100">
                <label for="roadTrafficwayFlow_id">Κυκλοφοριακή Ροή:</label>
                <select name="roadTrafficwayFlow_id" wire:model='roadTrafficwayFlow_id'>
                    @foreach ($roadTrafficwayFlow as $rtf )
                        <option value="{{ $rtf->id }}">{{$rtf->description}}</option>
                    @endforeach
                </select>
                @error('roadTrafficwayFlow_id')
                <small class="error">{{$message}}</small>
                @enderror
            </div>
            <div class="form-group s1-3">
                <label for="roadLaneNumber">Αριθμός Λορίδων:</label>
                <input type="number" wire:model='roadLaneNumber' name="roadLaneNumber" id="roadLaneNumber">
                @error('roadLaneNumber')
                <small class="error">{{$message}}</small>
                @enderror
            </div>
            <div class="form-group s2-3">
                <label for="roadType_id">roadType_id</label>
                <select name="roadType_id" wire:model='roadType_id'>
                    @foreach ($roadType as $rtp)
                        <option value="{{$rtp->id}}">{{$rtp->description}}</option>
                    @endforeach
                </select>
                @error('roadType_id')
                <small class="error">{{$message}}</small>
                @enderror
            </div>
            <div class="form-group s1-3">
                <label for="roadSpeedLimit">roadSpeedLimit</label>
                <input type="number" name="roadSpeedLimit" wire:model='roadSpeedLimit' id="roadSpeedLimit">
                @error('roadSpeedLimit')
                <small class="error">{{$message}}</small>
                @enderror
            </div>
            <div class="form-group s2-3">
                <label for="roadSpeedLimitType_id">roadSpeedLimitType_id</label>
                <select name="roadSpeedLimitType_id" wire:model='roadSpeedLimitType_id'>
                    @foreach ($roadSpeedLimitType as $roadSpeedLimitT )
                        <option value="{{$roadSpeedLimitT->id}}">{{$roadSpeedLimitT->description}}</option>
                    @endforeach
                </select>
                @error('roadSpeedLimitType_id')
                <small class="error">{{$message}}</small>
                @enderror
            </div>
            <div class="form-group s1-3">
                <label for="roadJunction_id">roadJunction_id</label>
                <select name="roadJunction_id" wire:model='roadJunction_id' >
                    @foreach ($roadJunction as $roadJunc )
                        <option value="{{$roadJunc->id}}">{{$roadJunc->description}}</option>
                    @endforeach
                </select>
                @error('roadJunction_id')
                <small class="error">{{$message}}</small>
                @enderror
            </div>
            <div class="form-group s1-3">
                <label for="roadLocalArea_id">roadLocalArea_id</label>
                <select name="roadLocalArea_id" wire:model="roadLocalArea_id">
                    @foreach ($roadLocalArea as $roadLocal )
                        <option value="{{$roadLocal->id}}">{{$roadLocal->description}}</option>
                    @endforeach
                </select>
                @error('roadLocalArea_id')
                <small class="error">{{$message}}</small>
                @enderror
            </div>

            <div class="form-group s1-3">
                <label for="roadAlignment_id">roadAlignment_id</label>
                <select name="roadAlignment_id" wire:model="roadAlignment_id">
                    @foreach ($roadAlignment as $roadAlig )
                        <option value="{{$roadAlig->id}}">{{$roadAlig->description}}</option>
                    @endforeach
                </select>
                @error('roadAlignment_id')
                <small class="error">{{$message}}</small>
                @enderror
            </div>
            <div class="form-group s1-3">
                <label for="roadConstructionZone_id">roadConstructionZone_id</label>
                <select name="roadConstructionZone_id" wire:model="roadConstructionZone_id">
                    @foreach ($roadConstructionZone as $roadConstruction )
                        <option value="{{$roadConstruction->id}}">{{$roadConstruction->description}}</option>
                    @endforeach
                </select>
                @error('roadConstructionZone_id')
                <small class="error">{{$message}}</small>
                @enderror
            </div>
            <div class="form-group s1-3">
                <label for="roadTrafficSigns_id">roadTrafficSigns_id</label>
                <select name="roadTrafficSigns_id" wire:model="roadTrafficSigns_id">
                    @foreach ($roadTrafficSigns as $roadTraffic )
                        <option value="{{$roadTraffic->id}}">{{$roadTraffic->description}}</option>
                    @endforeach
                </select>
                @error('roadTrafficSigns_id')
                <small class="error">{{$message}}</small>
                @enderror
            </div>
            <div class="form-group s1-3">
                <label for="roadTrafficSignalDeviceFunctioning_id">roadTrafficSignalDeviceFunctioning_id</label>
                <select name="roadTrafficSignalDeviceFunctioning_id" wire:model="roadTrafficSignalDeviceFunctioning_id">
                    @foreach ($roadTrafficSignalDeviceFunctioning as $roadTrafficSignalDevice )
                        <option value="{{$roadTrafficSignalDevice->id}}">{{$roadTrafficSignalDevice->description}}</option>
                    @endforeach
                </select>
                @error('roadTrafficSignalDeviceFunctioning_id')
                <small class="error">{{$message}}</small>
                @enderror
            </div>

            <div class="form-group s1-3">
                <label for="roadSurface_id">roadSurface_id</label>
                <select name="roadSurface_id" wire:model="roadSurface_id">
                    @foreach ($roadSurface as $roadSur )
                        <option value="{{$roadSur->id}}">{{$roadSur->description}}</option>
                    @endforeach
                </select>
                @error('roadSurface_id')
                <small class="error">{{$message}}</small>
                @enderror
            </div>
            <div class="form-group s1-3">
                <label for="roadPedestrianFacility_id">roadPedestrianFacility_id</label>
                <select name="roadPedestrianFacility_id" wire:model="roadPedestrianFacility_id">
                    @foreach ($roadPedestrianFacility as $roadPedestrian)
                        <option value="{{$roadPedestrian->id}}">{{$roadPedestrian->description}}</option>
                    @endforeach
                </select>
                @error('roadPedestrianFacility_id')
                <small class="error">{{$message}}</small>
                @enderror
            </div>
            <div class="form-group s1-3">
                <label for="roadCycleFacility_id">roadCycleFacility_id</label>
                <select name="roadCycleFacility_id" wire:model="roadCycleFacility_id">
                    @foreach ($roadCycleFacility as $roadCycleFac )
                        <option value="{{$roadCycleFac->id}}">{{$roadCycleFac->description}}</option>
                    @endforeach
                </select>
                @error('roadCycleFacility_id')
                <small class="error">{{$message}}</small>
                @enderror
            </div>
        </div>{{--Form category END--}}

        <div class="form-category"> <!-- FORM CATEGORY START-->
            <div class="form-group s1-2">
                <label for="roadLightConditions_id">roadLightConditions_id</label>
                <select name="roadLightConditions_id" wire:model="roadLightConditions_id">
                    @foreach ($roadLightConditions as $roadLight )
                        <option value="{{$roadLight->id}}">{{$roadLight->description}}</option>
                    @endforeach
                </select>
                @error('roadLightConditions_id')
                <small class="error">{{$message}}</small>
                @enderror
            </div>

            <div class="form-group s1-2">
                <label for="roadWeatherConditions_id">roadWeatherConditions_i</label>
                <select name="roadWeatherConditions_id" wire:model="roadWeatherConditions_id">
                    @foreach ($roadWeatherConditions as $roadWeather )
                        <option value="{{$roadWeather->id}}">{{$roadWeather->description}}</option>
                    @endforeach
                </select>
                @error('roadWeatherConditions_id')
                <small class="error">{{$message}}</small>
                @enderror
            </div>
            <div class="form-group s1-2">
                <label for="roadStrongWinds_id">roadStrongWinds_id</label>
                <select name="roadStrongWinds_id" wire:model="roadStrongWinds_id">
                    @foreach ($roadStrongWinds as $roadStrong )
                        <option value="{{$roadStrong->id}}">{{$roadStrong->description}}</option>
                    @endforeach
                </select>
                @error('roadStrongWinds_id')
                <small class="error">{{$message}}</small>
                @enderror
            </div>

            <div class="form-group s1-2">
                <label for="roadFog_id">roadFog_id</label>
                <select name="roadFog_id" wire:model="roadFog_id">
                    @foreach ($roadFog as $roadF )
                        <option value="{{$roadF->id}}">{{$roadF->description}}</option>
                    @endforeach
                </select>
                @error('roadFog_id')
                <small class="error">{{$message}}</small>
                @enderror
            </div>

            <div class="form-group s100-100 height-large">
                <label for="roadConditionComments">roadConditionComments</label>
                <textarea name="roadConditionComments" wire:model="roadConditionComments" id="roadConditionComments"></textarea>
                @error('roadConditionComments')
                <small class="error">{{$message}}</small>
                @enderror
            </div>
        </div>{{--Form category END--}}



        <div class="form-category"> <!-- FORM CATEGORY START-->

            <div class="form-group s1-2">
                <label for="roadPollutants_id">roadPollutants_id</label>
                <select name="roadPollutants_id" wire:model="roadPollutants_id">
                    @foreach ($roadPollutants as $roadPol )
                        <option value="{{$roadPol->id}}">{{$roadPol->description}}</option>
                    @endforeach
                </select>
                @error('roadPollutants_id')
                <small class="error">{{$message}}</small>
                @enderror
            </div>

            <div class="form-group s1-2">
                <label for="roadTransientFactors_id">roadTransientFactors_id</label>
                <select name="roadTransientFactors_id" wire:model="roadTransientConstraints_id">
                    @foreach ($roadTransientFactors as $roadTransient )
                        <option value="{{$roadTransient->id}}">{{$roadTransient->description}}</option>
                    @endforeach
                </select>
                @error('roadTransientFactors_id')
                <small class="error">{{$message}}</small>
                @enderror
            </div>
            <div class="form-group s1-2">
                <label for="roadSignalingFactors_id">roadSignalingFactors_id</label>
                <select name="roadSignalingFactors_id" wire:model="roadSignalingFactors_id">
                    @foreach ($roadSignalingFactors as $roadSignaling )
                        <option value="{{$roadSignaling->id}}">{{$roadSignaling->description}}</option>
                    @endforeach
                </select>
                @error('roadSignalingFactors_id')
                <small class="error">{{$message}}</small>
                @enderror
            </div>
            <div class="form-group s1-2">
                <label for="roadSpeedLimitingFacility_id">roadSpeedLimitingFacility_id</label>
                <select name="roadSpeedLimitingFacility_id" wire:model="roadSpeedLimitingFacility_id">
                    @foreach ($roadSpeedLimitingFacility as $roadSpeedLimitingF )
                        <option value="{{$roadSpeedLimitingF->id}}">{{$roadSpeedLimitingF->description}}</option>
                    @endforeach
                </select>
                @error('roadSpeedLimitingFacility_id')
                <small class="error">{{$message}}</small>
                @enderror
            </div>

            <div class="form-group s1-2">
                <label for="roadSLIContributedCollision_id">roadSLIContributedCollision_id</label>
                <select name="roadSLIContributedCollision_id" wire:model="roadSLIContributedToCollision_id">
                    @foreach ($roadSLIContributedCollision as $roadSLIContributed )
                        <option value="{{$roadSLIContributed->id}}">{{$roadSLIContributed->description}}</option>
                    @endforeach
                </select>
                @error('roadSLIContributedCollision_id')
                <small class="error">{{$message}}</small>
                @enderror
            </div>


            <div class="form-group s100-100 height-large">
                <label for="roadPossibleFactorsComments">roadPossibleFactorsComments</label>
                <textarea name="roadPossibleFactorsComments" wire:model="roadPossibleFactorsComments" id="roadPossibleFactorsComments"></textarea>
                @error('roadPossibleFactorsComments')
                <small class="error">{{$message}}</small>
                @enderror
            </div>
        </div> <!-- FORM CATEGORY END -->

        <div class="form-group s100-100 height-large">
            <label for="roadOtherComments">Άλλα Σχόλια</label>
            <textarea name="roadOtherComments" wire:model="roadOtherComments" id="roadOtherComments"></textarea>
            @error('roadOtherComments')
            <small class="error">{{$message}}</small>
            @enderror
        </div>

        <div class="form-category"> <!-- FORM SECTION -->

            <div class="form-group s2-3">
                <label for="roadInformationSource_id">roadInformationSource_id</label>
                <select name="roadInformationSource_id" wire:model="roadInformationSource_id">
                    @foreach ($roadInformationSource as $roadInformation )
                        <option value="{{$roadInformation->id}}">{{$roadInformation->description}}</option>
                    @endforeach
                </select>
                @error('roadInformationSource_id')
                <small class="error">{{$message}}</small>
                @enderror
            </div>

            <div class="form-group s1-3">
                <label for="roadISTrustLevel_id">roadISTrustLevel_id</label>
                <select name="roadISTrustLevel_id" wire:model="roadISTrustLevel_id">
                    @foreach ($roadISTrustLevel as $roadISTrust )
                        <option value="{{$roadISTrust->id}}">{{$roadISTrust->description}}</option>
                    @endforeach
                </select>
                @error('roadISTrustLevel_id')
                <small class="error">{{$message}}</small>
                @enderror
            </div>
            <div class="form-group s100-100 height-large">
                <label for="roadISTLDescription">roadISTLDescription</label>
                <textarea name="roadISTLDescription" wire:model="roadISTLDescription" id="roadISTLDescription"></textarea>
                @error('roadISTLDescription')
                <small class="error">{{$message}}</small>
                @enderror
            </div>

            <div class="form-group s2-3">
                <label for="roadInvestigationMethod_id">roadInvestigationMethod_id</label>
                <select name="roadInvestigationMethod_id" wire:model="roadInvestigationMethod_id">
                    @foreach ($roadInvestigationMethod as $roadInvestigation )
                        <option value="{{$roadInvestigation->id}}">{{$roadInvestigation->description}}</option>
                    @endforeach
                </select>
                @error('roadInvestigationMethod_id')
                <small class="error">{{$message}}</small>
                @enderror
            </div>

            <div class="form-group s1-3">
                <label for="roadIMTrustLevel_id">roadIMTrustLevel_id</label>
                <select name="roadIMTrustLevel_id" wire:model="roadIMTrustLevel_id" disabled>
                    @foreach ($roadIMTrustLevel as $roadIMTrust )
                        <option value="{{$roadIMTrust->id}}">{{$roadIMTrust->description}}</option>
                    @endforeach
                </select>
                @error('roadIMTrustLevel_id')
                <small class="error">{{$message}}</small>
                @enderror
            </div>

            <div class="form-group s100-100 height-large">
                <label for="roadIMTLDescription">roadIMTLDescription</label>
                <textarea name="roadIMTLDescription" id="roadIMTLDescription" wire:model="roadIMTLDescription"></textarea>
                @error('roadIMTLDescription')
                <small class="error">{{$message}}</small>
                @enderror
            </div>
        <div class="form-group s100-100">
            <div class="preview-container">
                @if($images)
                {{-- <img class="img-preview" src="{{$images->temporaryUrl()}}"> --}}
               @foreach ($images as $img)
               <img class="img-preview" src="{{$img->temporaryUrl()}}">
               @endforeach
                @endif
                {{-- <div class="img-preview" style='background-image: url("\C:\Users\user\Desktop\coc_bot_bg.png"); '> </div> --}}

            </div>
            <label for="accidentImage">Φόρτωση Εικόνων</label>
            <input type="file" name="roadImages" wire:model="images" multiple="multiple" value="Αναζήτηση εικόνων">
            @error('images.*')
            <small class="error">{{$message}}</small>
            @enderror

        </div>
        </div>
        </div>
        <div class="form-category"> <!-- FORM SECTION -->

            <input type="submit" wire:loading.attr='disabled' class="form-input form-submit" value="ΟΛΟΚΛΗΡΩΣΗ ΕΓΓΡΑΦΗΣ">

        </div>
    </form>
    </div>
