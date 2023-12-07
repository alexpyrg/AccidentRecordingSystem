<div>
    <div>
    </head>
    <body>
    <div class="full-wd">
       {{-- <h3 class="create-accident-title">ΠΡΟΒΟΛΗ ΟΧΗΜΑΤΟΣ</h3> --}}

       <form  class="data-input-form">
        @csrf
        {{-- @if($step == 0) --}}

            <div class="form-category"> <!-- FORM CATEGORY START-->
            @error('all')
            <span><p>{{$message}}</p></span>
            @enderror

            <div class="form-group s1-3 disp-block">
                <label for="licensePlate">Αριθμός Πινακίδας</label>
                <input type="text" disabled name="licensePlate" class="form-input" value="{{ $vehicle->vehicleLicensePlate }}">
                @error('licensePlate')
                <span><p>{{$message}}</p></span>
                @enderror
            </div>



            <div class="form-group s1-3">
            <label for="accident_id">Αριθμός Υπόθεσης</label>
                {{-- {{dd($id)}} --}}
            <select name="accident_id" class="form-input"  id="accident_id">
                <option value="0">Αριθμός Υπόθεσης...</option>
                @for ($i = 0; $i < count($id); $i++)
                @if($vehicle->accident_id == $id[$i]->id)
                <option value="{{ $id[$i]->id }}" selected>{{ $id[$i]->id }}</option>
                @endif
                @endfor
            </select>
            @error('accident_id')
            <span><p>{{$message}}</p></span>
            @enderror
            </div>

            <div class="form-group form-spacer s1-3"> &nbsp;  </div>


            <div class="form-group s1-4">
            <label for="vehicleType_id">Τύπος Οχήματος</label>
           <select name="vehicleType_id" class="form-input">
            @foreach ($vehicleType as $vtype)
            @if($vehicle->vehicleType_id == $vtype->id)
                <option value=" {{ $vtype->id }} " selected> {{ $vtype->description }} </option>
            @endif
                @endforeach
            </select>
            @error('vehicleType_id')
            <small class="error">{{$message}}</small>
            @enderror
            </div>
            <div class="form-group s1-4">
            <label for="vehicleManufacturer_id">Μάρκα Οχήματος</label>
            <select name="vehicleManufacturer_id" class="form-input" id="vehicleManufacturer">
                @foreach ($vehicleManufacturers as $vman)
                @if($vehicle->vehicleManufacturer_id == $vman->id)
                <option value="{{$vman->id}}" selected>{{$vman->description}}</option>
                @endif
                 @endforeach
            </select>
            @error('vehicleManufacturer_id')
            <small class="error">{{$message}}</small>
            @enderror
            </div>

            <div class="form-group s1-4">
            <label for="vehicleModel_id">Μοντέλο Οχήματος</label>
            <select name="vehicleModel_id"  class="form-input" id="vehicleModel">
                @foreach ($vehicleModels as $vmod)
                @if($vehicle->vehicleModel_id == $vmod->id)
                <option value="{{$vmod->id}}" selected>{{$vmod->name}}</option>
                @endif
                 @endforeach
            </select>
            @error('vehicleModel_id')
            <small class="error">{{$message}}</small>
            @enderror
            </div>

            <div class="form-group s1-4">
            <label for="vehicleColor_id">Χρώμα Οχήματος</label>
            <select name="vehicleColor_id" class="form-input" id="vehicleColor_id">
            @foreach ($vehicleColor as $vcol)
            @if($vehicle->vehicleColor_id == $vcol->id)
            <option value="{{$vcol->id}}" selected>{{$vcol->description}}</option>
            @endif
            @endforeach
            </select>
            @error('vehicleColor_id')
            <small class="error">{{$message}}</small>
            @enderror
            </div>
            <div class="form-group s1-3">
            <label for="vehicleWheelDrive_id">Κινητήριοι Τροχοί</label>
            <select name="vehicleWheelDrive_id"  class="form-input" id="vehicleWheelDrive">
                @foreach ($vehicleWheelDrive as $vwd)
                @if($vehicle->vehicleWheelDrive_id == $vwd->id)
                <option value="{{$vwd->id}}" selected>{{$vwd->description}}</option>
                @endif
                 @endforeach
            </select>
            @error('vehicleWheelDrive_id')
            <small class="error">{{$message}}</small>
            @enderror
            </div>
            <div class="form-group s1-3">
                <label for="vehicleDrivePosition_id">Θέση οδήγησης του οχήματος</label>
                <select name="vehicleDrivePosition_id" class="form-input" id="vehicleDrivePosition">
                    @foreach ($vehicleDrivePosition as $vdp)
                    @if($vehicle->vehicleDrivePosition_id == $vdp->id)
                    <option value="{{$vdp->id}}" selected>{{$vdp->description}}</option>
                    @endif
                    @endforeach
                </select>
                @error('vehicleDrivePosition_id')
                <small class="error">{{$message}}</small>
                @enderror
                </div>
            <div class="form-group s1-3">
                <label for="vehicleLength">Μήκος Οχήματος(mm)</label>
                <input type="number" name="vehicleLength" class="s100-100 form-input" placeholder="π.χ. 2300" value="{{$vehicle->vehicleLength}}">
                @error('vehicleLength')
                <small class="error">{{$message}}</small>
                @enderror
            </div>
            <div class="form-group s1-3">
                <label for="vehicleWidth">Πλάτος Οχήματος(mm)</label>
                <input type="number" name="vehicleWidth"  class="s100-100 form-input" placeholder="π.χ. 2300" value="{{ $vehicle->vehicleWidth }}">
                @error('vehicleWidth')
                <small class="error">{{$message}}</small>
                @enderror
            </div>
            <div class="form-group s1-3">
                <label for="vehicleRoadwayAlignment_id" class="form-input text-14">Ευθυγράμμηση οχήματος με βάση την οδό</label>
                <select name="vehicleRoadwayAlignment_id" >
                    @foreach ($vehicleRoadwayAlignment as $vrwa)
                    @if($vehicle->vehicleRoadwayAlignment_id == $vrwa->id)
                    <option value="{{$vrwa->id}}" selected>{{$vrwa->description}}</option>
                    @endif
                     @endforeach
                </select>
                @error('vehicleRoadwayAlignment_id')
                <small class="error">{{$message}}</small>
                @enderror
            </div>

            <div class="form-group s1-3">
                <label for="vehicleTrailer_id" class="s100-100 form-input text-14">Ρυμουλκούμενο</label>
                <select name="vehicleTrailer_id" >
                    @foreach ($vehicleTrailer as $vtrlr)
                    @if($vehicle->vehicleTrailer_id == $vtrlr->id)
                    <option value="{{$vtrlr->id}}" selected>{{$vtrlr->description}}</option>
                    @endif
                    @endforeach
                </select>
                @error('vehicleTrailer_id')
                <small class="error">{{$message}}</small>
                @enderror
            </div>

            <div class="form-group s1-3">
                <label for="vehicleEnginePower">Ισχύς Κινητήρα (σε kW)</label>
                <input type="number" class="form-input" name="vehicleEnginePower" value="{{ $vehicle->vehicleEnginePower }}">
                @error('vehicleEnginePower')
                <small class="error">{{$message}}</small>
                @enderror
            </div>

            <div class="form-group s1-3">
                <label for="vehicleManufactureDate">Έτος κατασκευής</label>
                <input type="number" class="form-input"  name="vehicleManufactureDate" placeholder="" value="{{ $vehicle->vehicleManufactureDate }}">
                @error('vehicleManufactureDate')
                <small class="error">{{$message}}</small>
                @enderror
            </div>

            <div class="form-group s1-3">
                <label for="vehicleTare">Απόβαρο</label>
                <input type="number" class="form-input"  name="vehicleTare" placeholder="" value="{{ $vehicle->vehicleTare }}">
                @error('vehicleTare')
                <small class="error">{{$message}}</small>
                @enderror
            </div>

            <div class="form-group s1-3">
                <label for="vehicleAxles">Αριθμός αξόνων</label>
                <input type="number" name="vehicleAxles"  placeholder="" value="{{ $vehicle->vehicleAxles }}">
                @error('vehicleAxles')
                <small class="error">{{$message}}</small>
                @enderror
            </div>

            <div class="form-group s100-100">
                <label for="vehicleGeneralComments">Γενικά Σχόλια</label>
                <textarea name="vehicleGeneralComments"  style="min-height: 50px; max-width: 100%;" placeholder=""> {{ $vehicle->vehicleGeneralComments}} </textarea>
                @error('vehicleGeneralComments')
                <small class="error">{{$message}}</small>
                @enderror
            </div>




            </div>                      {{--Form category END--}}






            <div class="form-category"> <!-- FORM CATEGORY START-->
                <div class="form-group s100-100">
                    <label for="vehicleOccupantsNumber" class="s1-3" style="display: inline;">Αριθμός Επιβατών / Αναβατών στο όχημα: </label>
                    <input type="number"  name="vehicleOccupantsNumber" class="s1-4" style="display: inline;" id="vehicleOccupantsNumber"  value="{{ $vehicle->vehicleOccupantsNumber }}">
                    @error('vehicleOccupantsNumber')
                    <small class="error">{{$message}}</small>
                    @enderror
                </div>
            </div>                      {{--Form category END--}}

            <div class="form-category">
            <div class="form-group s2-3">
                <label for="vehicleDamagePossibleFactor_id" class="s2-3 inlineblock" style="display: inline;">Είναι οι βλάβες στο όχημα πιθανά αίτια του ατυχήματος;</label>
                <select name="vehicleDamagePossibleFactor_id" class="s1-4 inlineblock" style="display: inline; max-width: 200px!important;">
                    @foreach ($vehicleDamagePossibleFactor as $vdpf )
                    @if($vehicle->vehicleDamagePossibleFactor_id == $vdpf->id)
                        <option value="{{$vdpf->id}}" selected>{{$vdpf->description}}</option>
                    @endif
                        @endforeach
                </select>
                @error('vehicleDamagePossibleFactor_id')
                <small class="error">{{$message}}</small>
                @enderror
            </div>
            <div class="form-group s100-100">
                <label for="vehicleDPFComments">Σχόλια</label>
                <textarea name="vehicleDPFComments"  class="s100-100" style="min-height: 50px;"> {{ $vehicle->vehiclePDFComments }}</textarea>
                @error('vehicleDPFComments')
                <small class="error">{{$message}}</small>
                @enderror
            </div>

            <div class="form-group s2-3">
                <label for="vehicleInspected_id">Έχει περάσει κτέο;</label>
                <select name="vehicleInspected_id" id="vehicleInspected_id" class="s100-100">
                    @foreach ($vehicleInspected as $vinsp )
                    @if($vehicle->vehicleInspected_id == $vinsp->id)
                        <option value="{{$vinsp->id}}" selected>{{$vinsp->description}}</option>
                    @endif
                        @endforeach
                </select>
                @error('vehicleInspected_id')
                <small class="error">{{$message}}</small>
                @enderror

            </div>
            <div class="form-group s1-3">
                <label for="vehicleSwerved_id">Ελειγμός του οχήματος πριν απο το ατύχημα</label>
                <select name="vehicleSwerved_id" >
                    @foreach ($vehicleSwerved as $vswerv )
                    @if($vehicle->vehicleSwerved_id == $vswerv->id)
                        <option value="{{$vswerv->id}}" selected>{{$vswerv->description}}</option>
                    @endif
                        @endforeach
                </select>
                @error('vehicleSwerved_id')
                <small class="error">{{$message}}</small>
                @enderror

            </div>
            <div class="form-group s1-3">
                <label for="vehicleDangerousCargo_id"> Επικίνδυνο Φορτίο</label>
                <select name="vehicleDangerousCargo_id" >
                    @foreach ($vehicleDangerousCargo as $vdcargo)
                    @if($vehicle->vahicleDangerousCargo_id == $vdcargo->id)
                        <option value="{{$vdcargo->id}}" selected>{{$vdcargo->description}}</option>
                        @endif
                        @endforeach
                </select>
                @error('vehicleDangerousCargo_id')
                <small class="error">{{$message}}</small>
                @enderror
            </div>

            <div class="form-group s1-3">
                <label for="vehicleScatteredDangerousCargo_id">Διασκορπισμός επικίνδυνου φορτίου</label>
                <select type="number" name="vehicleScatteredDangerousCargo_id" >
                    @foreach ($vehicleScatteredDangerousCargo as $vsdc)
                    @if($vehicle->vehicleScatteredDangerousCargo_id == $vsdc->id)
                    <option value="{{$vsdc->id}}" selected>{{$vsdc->description}}</option>
                    @endif
                    @endforeach
                </select>
                    @error('vehicleScatteredDangerousCargo_id')
                <small class="error">{{$message}}</small>
                @enderror
            </div>
            </div>{{--Form category END--}}



            <div class="form-category"> <!-- FORM CATEGORY START-->
                <h3>Συνέπειες</h3>
            <div class="form-group s100-100 text-align-right">
                <label for="vehicleCollisions" class="s1-3 inline">Αριθμός Συγκρούσεων</label>
                <input type="number"  class="s2-3 inline" name="vehicleCollisions" value="{{ $vehicle->vehicleCollisions }}" disabled>
                @error('vehicleCollisions')
                <small class="error">{{$message}}</small>
                @enderror
            </div>
             <h4>Ζημιά Οχήματος</h4>
            <div class="form-group s100-100">
                <label for="CDC3_id">CDC 3</label>
                <select name="CDC3_id" >
                    @foreach ($cdc3 as $cdc3)
                    @if($vehicle->CDC3_id == $cdc3->id)
                        <option value="{{$cdc3->id}}" selected>{{$cdc3->description}}</option>
                   @endif
                        @endforeach
                </select>
                @error('CDC3_id')
                <small class="error">{{$message}}</small>
                @enderror
            </div>
            <div class="form-group s100-100">
                <label for="CDC4_id">CDC 4</label>
                <select name="CDC4_id" >
                    @foreach ($cdc4 as $cdc4 )
                    @if($vehicle->CDC4_id == $cdc4->id)
                        <option value="{{$cdc4->id}}" selected>{{$cdc4->description}}</option>
                    @endif
                        @endforeach
                </select>
                @error('CDC4_id')
                <small class="error">{{$message}}</small>
                @enderror
            </div>
            <div class="form-group s100-100">
                <label for="vehicleOnFire_id"> Υπήρξε Φωτιά;</label>
                <select name="vehicleOnFire_id" >
                    @foreach ($vehicleOnFire as $vonfire )
                    @if($vehicle->vehicleOnFire_id == $vonfire->id)
                        <option value="{{$vonfire->id}}" selected>{{$vonfire->description}}</option>
                   @endif
                        @endforeach
                </select>
                @error('vehicleOnFire_id')
                <small class="error">{{$message}}</small>
                @enderror
            </div>

            <div class="form-group s100-100">
                <label for="vehicleFirefightingEquipmentUsed_id">Χρήση Πυροσβεστικού υλικού;</label>
                <select name="vehicleFirefightingEquipmentUsed_id">
                    @foreach ($vehicleFirefightingEquipmentUsed as $vffeused )
                    @if($vehicle->vehicleFirefightingEquipmentUsed_id == $vffeused->id)
                    <option value="{{$vffeused->id}}" selected>{{$vffeused->description}}</option>
                   @endif
                    @endforeach
                </select>
                @error('vehicleFirefightingEquipmentUsed_id')
                <small class="error">{{$message}}</small>
                @enderror
            </div>
            <div class="form-group s100-100">
                <label for="vehicleCollisionOffroadObject_id">πρόσκρουση με αντικείμενο εκτός οδού</label>
                <select name="vehicleCollisionOffroadObject_id" >
                    @foreach ($vehicleCollisionOffroadObject as $vcoo )
                    @if($vehicle->vehicleCollisionOffroadObject_id == $vcoo->id)
                        <option value="{{$vcoo->id}}" selected>{{$vcoo->description}}</option>
                    @endif
                        @endforeach
                </select>
                @error('vehicleCollisionOffroadObject_id')
                <small class="error">{{$message}}</small>
                @enderror
            </div>
            <div class="form-group s100-100 height-large">
                <label for="vehicleCollisionType_id">Τύπος Σύγκρουσης</label>
                <select name="vehicleCollisionType_id" >
                    @foreach ($vehicleCollisionType as $vctype)
                    @if($vehicle->vehicleCollisionType_id == $vctype->id)
                        <option value="{{$vctype->id}}" selected>{{$vctype->description}}</option>
                    @endif
                        @endforeach
                </select>
                @error('vehicleCollisionType_id')
                <small class="error">{{$message}}</small>
                @enderror
            </div>
            </div>{{--Form category END--}}
            <div class="form-category flex-category"> <!-- FORM CATEGORY START-->
                <div class="form-group">
                    <label for="ABS_id">ABS</label>
                    <select name="ABS_id" >
                        @foreach ($abs as $ab )
                        @if($vehicle->ABS_id == $ab->id)
                            <option value="{{$ab->id}}" selected>{{$ab->description}}</option>
                        @endif
                        @endforeach
                    </select>
                    @error('ABS_id')
                    <small class="error">{{$message}}</small>
                    @enderror
                </div>
                <div class="form-group">
                    <label for="ESP_id">ESP</label>
                    <select name="ESP_id" >
                        @foreach ($esp as $es )
                        @if($vehicle->ESP_id == $es->id)
                            <option value="{{$es->id}}" selected>{{$es->description}}</option>
                        @endif
                        @endforeach
                    </select>
                    @error('ESP_id')
                    <small class="error">{{$message}}</small>
                    @enderror
                </div>

                <div class="form-group">
                    <label for="TCS_id">TCS</label>
                    <select name="TCS_id" >
                        @foreach ($tcs as $tc )
                        @if($vehicle->TCS_id == $tc->id)
                            <option value="{{$tc->id}}" selected>{{$tc->description}}</option>
                        @endif
                        @endforeach
                    </select>
                    @error('TCS_id')
                    <small class="error">{{$message}}</small>
                    @enderror
                </div>

                <div class="form-group">
                    <label for="ACS_id">ACS</label>
                    <select name="ACS_id" >
                        @foreach ($acs as $ac )
                        @if($vehicle->ACS_id == $ac->id)
                            <option value="{{$ac->id}}" selected>{{$ac->description}}</option>
                        @endif
                            @endforeach
                    </select>
                    @error('ACS_id')
                    <small class="error">{{$message}}</small>
                    @enderror
                </div>

                <div class="form-group">
                    <label for="LDW_id">LDW</label>
                    <select name="LDW_id" >
                        @foreach ($ldw as $ld )
                        @if($vehicle->LDW_id == $ld->id)
                            <option value="{{$ld->id}}" selected>{{$ld->description}}</option>
                        @endif
                            @endforeach
                    </select>
                    @error('LDW_id')
                    <small class="error">{{$message}}</small>
                    @enderror
                </div>

                <div class="form-group">
                    <label for="CSS_id">CSS</label>
                    <select name="CSS_id" >
                        @foreach ($css as $cs )
                        @if($vehicle->vehicleCSS_id == $cs->id)
                            <option value="{{$cs->id}}" selected>{{$cs->description}}</option>
                        @endif
                        @endforeach
                    </select>
                    @error('CSS_id')
                    <small class="error">{{$message}}</small>
                    @enderror
                </div>


                <textarea name="vehicleElectronicsComments"  cols="30" rows="10"></textarea>
                @error('vehicleElectronicsComments')
                <small class="error">{{$message}}</small>
                @enderror
            </div>  {{-- Category END --}}

            <div class="form-category"> <!-- FORM CATEGORY START-->
                    <div class="form-group s3-4 float-l">
                        <label for="vehicleInformationSource_id">Πηγή Πληροφοριών</label>
                        <select name="vehicleInformationSource_id" value="{{old('vehicleInformationSource_id')}}">
                            @foreach ($vehicleInformationSource as $vis )
                            @if($vehicle->vehicleInformationSource_id == $vis->id)
                            <option value="{{$vis->id}}" selected>{{$vis->description}}</option>
                            @endif
                            @endforeach
                        </select>
                        @error('vehicleInformationSource_id')
                        <small class="error">{{$message}}</small>
                        @enderror
                    </div>
                    <div class="form-group s1-4 float-r">
                        <label   for="vehicleISTrustLevel_id">Επιπεδο εμπιστοσύνης</label>
                        <select name="vehicleISTrustLevel_id" >
                            @foreach ($vehicleISTrustLevel as $vistl )
                            @if($vehicle->vehicleISTrustLevel_id == $vistl->id)
                            <option value="{{$vistl->id}}" selected>{{$vistl->description}}</option>
                            @endif
                            @endforeach
                        </select>
                        @error('vehicleISTrustLevel_id')
                        <small class="error">{{$message}}</small>
                        @enderror
                    </div>

                    <div class="form-group s100-100 height-large">
                        <label for="vehicleISTLDescription">Περιγραφή επιπέδου εμπιστοσύνης</label>
                        <textarea name="vehicleISTLDescription" id="vehicleISTLDescription"> {{$vehicle->vehicleISTLDescription}}</textarea>
                        @error('vehicleISTLDescription')
                        <small class="error">{{$message}}</small>
                        @enderror
                    </div>
            {{-- <h3 class="form-h3">  </h3> --}}
            <div class="form-group s3-4">
                <label for="vehicleInvestigationMethod_id">Μέθοδος Διερεύνησης</label>
                <select name="vehicleInvestigationMethod_id" >
                    @foreach ($vehicleInvestigationMethod as $vim )
                    @if($vehicle->vehicleInvestigationMethod_id == $vim->id)
                    <option value="{{$vim->id}}" selected>{{$vim->description}}</option>
                    @endif
                    @endforeach
                </select>
                @error('vehicleInvestigationMethod_id')
                <small class="error">{{$message}}</small>
                @enderror
            </div>

                <div class="form-group s1-4">
                    <label for="vehicleIMTrustLevel_id">Επίπεδο Εμπιστοσύνης</label>
                    <select name="vehicleIMTrustLevel_id"style="width: 100%;">
                        @foreach ($vehicleIMTrustLevel as $vimtl )
                        @if($vehicle->vehicleIMTrustLevel_id == $vimtl->id)
                        <option value="{{$vimtl->id}}" selected>{{$vimtl->description}}</option>
                        @endif
                        @endforeach
                    </select>
                    @error('vehicleIMTrustLevel_id')
                    <small class="error">{{$message}}</small>
                    @enderror
                </div>

                <div class="form-group s100-100 height-large">
                    <label for="vehicleIMTLDescription">Περιγραφή επιπέδου εμπιστοσύνης</label>
                    <textarea name="vehicleIMTLDescription" id="vehicleIMTLDescription"> {{ $vehicle->vehicleIMTLDescription }}</textarea>
                    @error('vehicleIMTLDescription')
                    <small class="error">{{$message}}</small>
                    @enderror
                </div>
                <input type="hidden" name="user_id" value={{$userid}}>
            </div> <!-- FORM CATEGORY END -->

            </div>
        </form>
        </div>
    </div>

</div>
