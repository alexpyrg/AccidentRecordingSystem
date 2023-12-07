<div>
</head>
<body>
<div class="full-wd">
   <h3 class="create-accident-title">Νέα Εγγραφή [ΟΧΗΜΑ]</h3>

   <form wire:submit.prevent='save' method="POST" action="/create-vehicle" class="data-input-form">
    @csrf
    {{-- @if($step == 0) --}}

        <div class="form-category"> <!-- FORM CATEGORY START-->
        @error('all')
        <span><p>{{$message}}</p></span>
        @enderror

        <div class="form-group s1-3 disp-block">
            <label for="licensePlate">Αριθμός Πινακίδας</label>
            <input type="text" wire:model="vehicleLicensePlate" name="licensePlate" class="form-input" placeholder="Αριθμός Πινακίδα π.χ. ΑΒΓ1234">
            @error('licensePlate')
            <span><p>{{$message}}</p></span>
            @enderror
        </div>



        <div class="form-group s1-3">
        <label for="accident_id">Αριθμός Υπόθεσης</label>
            {{-- {{dd($id)}} --}}
        <select name="accident_id" class="form-input" wire:model="accident_id" id="accident_id">
            <option value="0">Αριθμός Υπόθεσης...</option>
            @for ($i = 0; $i < count($id); $i++)
            <option value="{{ $id[$i]->id }}">{{ $id[$i]->id }}</option>
            @endfor
        </select>
        @error('accident_id')
        <span><p>{{$message}}</p></span>
        @enderror
        </div>

        <div class="form-group form-spacer s1-3"> &nbsp;  </div>

        <div class="form-group s1-3">
        <label for="record-finished">Ολοκληρώθηκε η καταχώρηση;</label>
        <select type="text" class="form-input" name="record-finished" wire:model="recordFinished"  placeholder="Done">
            <option value=0>Όχι</option>
            <option value=1>Ναί</option>
        </select>
        @error('record-finished')
        <small class="error">{{$message}}</small>
        @enderror
        </div>

        <div class="form-group s1-4">
        <label for="vehicleType_id">Τύπος Οχήματος</label>
       <select name="vehicleType_id" wire:model='vehicleType_id' class="form-input">
        @foreach ($vehicleType as $vtype)
            <option value=" {{ $vtype->id }} "> {{ $vtype->description }} </option>
        @endforeach
        </select>
        @error('vehicleType_id')
        <small class="error">{{$message}}</small>
        @enderror
        </div>
        <div class="form-group s1-4">
        <label for="vehicleManufacturer_id">Μάρκα Οχήματος</label>
        <select wire:model="vehicleManufacturer" name="vehicleManufacturer_id" class="form-input" id="vehicleManufacturer">
            <option value="0" selected>Επιλέξτε...</option>
            @foreach ($vehicleManufacturers as $vman)
            <option value="{{$vman->id}}">{{$vman->description}}</option>
             @endforeach
        </select>
        @error('vehicleManufacturer_id')
        <small class="error">{{$message}}</small>
        @enderror
        </div>

        <div class="form-group s1-4">
        <label for="vehicleModel_id">Μοντέλο Οχήματος</label>
        <select name="vehicleModel_id" wire:model="vehicleModel_id" class="form-input" id="vehicleModel">
            <option value="0" selected>Επιλέξτε...</option>
            @if(!is_null($vehicleManufacturer))
            @foreach ($models as $vmod)
            <option value="{{$vmod->id}}">{{$vmod->name}}</option>
             @endforeach
             @endif
        </select>
        @error('vehicleModel_id')
        <small class="error">{{$message}}</small>
        @enderror
        </div>

        <div class="form-group s1-4">
        <label for="vehicleColor_id">Χρώμα Οχήματος</label>
        <select name="vehicleColor_id" wire:model='vehicleColor_id' class="form-input" id="vehicleColor_id">
        @foreach ($vehicleColor as $vcol)
        <option value="{{$vcol->id}}">{{$vcol->description}}</option>
         @endforeach
        </select>
        @error('vehicleColor_id')
        <small class="error">{{$message}}</small>
        @enderror
        </div>
        <div class="form-group s1-3">
        <label for="vehicleWheelDrive_id">Κινητήριοι Τροχοί</label>
        <select name="vehicleWheelDrive_id" wire:model='vehicleWheelDrive_id' class="form-input" id="vehicleWheelDrive">
            @foreach ($vehicleWheelDrive as $vwd)
            <option value="{{$vwd->id}}">{{$vwd->description}}</option>
             @endforeach
        </select>
        @error('vehicleWheelDrive_id')
        <small class="error">{{$message}}</small>
        @enderror
        </div>
        <div class="form-group s1-3">
            <label for="vehicleDrivePosition_id">Θέση οδήγησης του οχήματος</label>
            <select name="vehicleDrivePosition_id" wire:model='vehicleDrivePosition_id' class="form-input" id="vehicleDrivePosition">
                @foreach ($vehicleDrivePosition as $vdp)
                <option value="{{$vdp->id}}">{{$vdp->description}}</option>
                 @endforeach
            </select>
            @error('vehicleDrivePosition_id')
            <small class="error">{{$message}}</small>
            @enderror
            </div>
        <div class="form-group s1-3">
            <label for="vehicleLength">Μήκος Οχήματος(mm)</label>
            <input type="number" name="vehicleLength" wire:model="vehicleLength" class="s100-100 form-input" placeholder="π.χ. 2300" value="{{Old('vehicleLength')}}">
            @error('vehicleLength')
            <small class="error">{{$message}}</small>
            @enderror
        </div>
        <div class="form-group s1-3">
            <label for="vehicleWidth">Πλάτος Οχήματος(mm)</label>
            <input type="number" name="vehicleWidth" wire:model="vehicleWidth" class="s100-100 form-input" placeholder="π.χ. 2300" value="{{Old('vehicleWidth')}}">
            @error('vehicleWidth')
            <small class="error">{{$message}}</small>
            @enderror
        </div>
        <div class="form-group s1-3">
            <label for="vehicleRoadwayAlignment_id" class="form-input text-14">Ευθυγράμμηση οχήματος με βάση την οδό</label>
            <select name="vehicleRoadwayAlignment_id" wire:model="vehicleRoadwayAlignment_id" >
                @foreach ($vehicleRoadwayAlignment as $vrwa)
                <option value="{{$vrwa->id}}">{{$vrwa->description}}</option>
                 @endforeach
            </select>
            @error('vehicleRoadwayAlignment_id')
            <small class="error">{{$message}}</small>
            @enderror
        </div>

        <div class="form-group s1-3">
            <label for="vehicleTrailer_id" class="s100-100 form-input text-14">Ρυμουλκούμενο</label>
            <select name="vehicleTrailer_id" wire:model="vehicleTrailer_id">
                @foreach ($vehicleTrailer as $vtrlr)
                <option value="{{$vtrlr->id}}">{{$vtrlr->description}}</option>
                 @endforeach
            </select>
            @error('vehicleTrailer_id')
            <small class="error">{{$message}}</small>
            @enderror
        </div>

        <div class="form-group s1-3">
            <label for="vehicleEnginePower">Ισχύς Κινητήρα (σε kW)</label>
            <input type="number" class="form-input" wire:model="vehicleEnginePower" name="vehicleEnginePower" placeholder="">
            @error('vehicleEnginePower')
            <small class="error">{{$message}}</small>
            @enderror
        </div>

        <div class="form-group s1-3">
            <label for="vehicleManufactureDate">Έτος κατασκευής</label>
            <input type="number" class="" wire:model="vehicleManufactureDate" name="vehicleManufactureDate" placeholder="" value="{{Old('vehicleManufactureDate')}}">
            @error('vehicleManufactureDate')
            <small class="error">{{$message}}</small>
            @enderror
        </div>

        <div class="form-group s1-3">
            <label for="vehicleTare">Απόβαρο</label>
            <input type="number" class="form-input" wire:model="vehicleTare" name="vehicleTare" placeholder="" value="{{Old('vehicleTare')}}">
            @error('vehicleTare')
            <small class="error">{{$message}}</small>
            @enderror
        </div>

        <div class="form-group s1-3">
            <label for="vehicleAxles">Αριθμός αξόνων</label>
            <input type="number" name="vehicleAxles" wire:model="vehicleAxles" placeholder="" value="{{Old('vehicleAxles')}}">
            @error('vehicleAxles')
            <small class="error">{{$message}}</small>
            @enderror
        </div>

        <div class="form-group s100-100">
            <label for="vehicleGeneralComments">Γενικά Σχόλια</label>
            <textarea name="vehicleGeneralComments" wire:model="vehicleGeneralComments" style="min-height: 50px; max-width: 100%;" placeholder=""> </textarea>
            @error('vehicleGeneralComments')
            <small class="error">{{$message}}</small>
            @enderror
        </div>




        </div>                      {{--Form category END--}}






        <div class="form-category"> <!-- FORM CATEGORY START-->
            <div class="form-group s100-100">
                <label for="vehicleOccupantsNumber" class="s1-3" style="display: inline;">Αριθμός Επιβατών / Αναβατών στο όχημα: </label>
                <input type="number" wire:model='vehicleOccupantsNumber' name="vehicleOccupantsNumber" class="s1-4" style="display: inline;" id="vehicleOccupantsNumber"  placeholder="π.χ. 2">
                @error('vehicleOccupantsNumber')
                <small class="error">{{$message}}</small>
                @enderror
            </div>
        </div>                      {{--Form category END--}}

        <div class="form-category">
        <div class="form-group s2-3">
            <label for="vehicleDamagePossibleFactor_id" class="s2-3 inlineblock" style="display: inline;">Είναι οι βλάβες στο όχημα πιθανά αίτια του ατυχήματος;</label>
            <select name="vehicleDamagePossibleFactor_id" wire:model='vehicleDamagePossibleFactor_id' class="s1-4 inlineblock" style="display: inline; max-width: 200px!important;">
                @foreach ($vehicleDamagePossibleFactor as $vdpf )
                    <option value="{{$vdpf->id}}">{{$vdpf->description}}</option>
                @endforeach
            </select>
            @error('vehicleDamagePossibleFactor_id')
            <small class="error">{{$message}}</small>
            @enderror
        </div>
        <div class="form-group s100-100">
            <label for="vehicleDPFComments">Σχόλια</label>
            <textarea name="vehicleDPFComments"  wire:model='vehicleDPFComments' class="s100-100" style="min-height: 50px;"> </textarea>
            @error('vehicleDPFComments')
            <small class="error">{{$message}}</small>
            @enderror
        </div>

        <div class="form-group s2-3">
            <label for="vehicleInspected_id">Έχει περάσει κτέο;</label>
            <select name="vehicleInspected_id" id="vehicleInspected_id" wire:model='vehicleInspected_id' class="s100-100">
                @foreach ($vehicleInspected as $vinsp )
                    <option value="{{$vinsp->id}}"@if(old('vehicleInspected_id') == $vinsp->id)
                        @selected(old('vehicleInspected_id') == $vinsp->id)
                        @endif>{{$vinsp->description}}</option>
                @endforeach
            </select>
            @error('vehicleInspected_id')
            <small class="error">{{$message}}</small>
            @enderror

        </div>
        <div class="form-group s1-3">
            <label for="vehicleSwerved_id">Ελειγμός του οχήματος πριν απο το ατύχημα</label>
            <select name="vehicleSwerved_id" wire:model="vehicleSwerved_id">
                @foreach ($vehicleSwerved as $vswerv )
                    <option value="{{$vswerv->id}}">{{$vswerv->description}}</option>
                @endforeach
            </select>
            @error('vehicleSwerved_id')
            <small class="error">{{$message}}</small>
            @enderror

        </div>
        <div class="form-group s1-3">
            <label for="vehicleDangerousCargo_id"> Επικίνδυνο Φορτίο</label>
            <select name="vehicleDangerousCargo_id" wire:model="vehicleDangerousCargo_id">
                @foreach ($vehicleDangerousCargo as $vdcargo)
                    <option value="{{$vdcargo->id}}">{{$vdcargo->description}}</option>
                @endforeach
            </select>
            @error('vehicleDangerousCargo_id')
            <small class="error">{{$message}}</small>
            @enderror
        </div>

        <div class="form-group s1-3">
            <label for="vehicleScatteredDangerousCargo_id">Διασκορπισμός επικίνδυνου φορτίου</label>
            <select type="number" name="vehicleScatteredDangerousCargo_id" wire:model="vehicleScatteredDangerousCargo_id">
                @foreach ($vehicleScatteredDangerousCargo as $vsdc)
                <option value="{{$vsdc->id}}">{{$vsdc->description}}</option>
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
            <input type="number" wire:model="vehicleCollisions" class="s2-3 inline" name="vehicleCollisions">
            @error('vehicleCollisions')
            <small class="error">{{$message}}</small>
            @enderror
        </div>
         <h4>Ζημιά Οχήματος</h4>
        <div class="form-group s100-100">
            <label for="CDC3_id">CDC 3</label>
            <select name="CDC3_id" wire:model='CDC3_id'>
                @foreach ($cdc3 as $cdc3)
                    <option value="{{$cdc3->id}}">{{$cdc3->description}}</option>
                @endforeach
            </select>
            @error('CDC3_id')
            <small class="error">{{$message}}</small>
            @enderror
        </div>
        <div class="form-group s100-100">
            <label for="CDC4_id">CDC 4</label>
            <select name="CDC4_id" wire:model="CDC4_id">
                @foreach ($cdc4 as $cdc4 )
                    <option value="{{$cdc4->id}}">{{$cdc4->description}}</option>
                @endforeach
            </select>
            @error('CDC4_id')
            <small class="error">{{$message}}</small>
            @enderror
        </div>
        <div class="form-group s100-100">
            <label for="vehicleOnFire_id"> Υπήρξε Φωτιά;</label>
            <select name="vehicleOnFire_id" wire:model="vehicleOnFire_id">
                @foreach ($vehicleOnFire as $vonfire )
                    <option value="{{$vonfire->id}}">{{$vonfire->description}}</option>
                @endforeach
            </select>
            @error('vehicleOnFire_id')
            <small class="error">{{$message}}</small>
            @enderror
        </div>

        <div class="form-group s100-100">
            <label for="vehicleFirefightingEquipmentUsed_id">Χρήση Πυροσβεστικού υλικού;</label>
            <select name="vehicleFirefightingEquipmentUsed_id" wire:model="vehicleFirefightingEquipmentUsed_id">
                @foreach ($vehicleFirefightingEquipmentUsed as $vffeused )
                <option value="{{$vffeused->id}}">{{$vffeused->description}}</option>
                @endforeach
            </select>
            @error('vehicleFirefightingEquipmentUsed_id')
            <small class="error">{{$message}}</small>
            @enderror
        </div>
        <div class="form-group s100-100">
            <label for="vehicleCollisionOffroadObject_id">πρόσκρουση με αντικείμενο εκτός οδού</label>
            <select name="vehicleCollisionOffroadObject_id" wire:model="vehicleCollisionOffroadObject_id">
                @foreach ($vehicleCollisionOffroadObject as $vcoo )
                    <option value="{{$vcoo->id}}">{{$vcoo->description}}</option>
                @endforeach
            </select>
            @error('vehicleCollisionOffroadObject_id')
            <small class="error">{{$message}}</small>
            @enderror
        </div>
        <div class="form-group s100-100 height-large">
            <label for="vehicleCollisionType_id">Τύπος Σύγκρουσης</label>
            <select name="vehicleCollisionType_id" wire:model="vehicleCollisionType_id">
                @foreach ($vehicleCollisionType as $vctype )
                    <option value="{{$vctype->id}}">{{$vctype->description}}</option>
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
                <select name="ABS_id" wire:model="ABS_id">
                    @foreach ($abs as $ab )
                        <option value="{{$ab->id}}">{{$ab->description}}</option>
                    @endforeach
                </select>
                @error('ABS_id')
                <small class="error">{{$message}}</small>
                @enderror
            </div>
            <div class="form-group">
                <label for="ESP_id">ESP</label>
                <select name="ESP_id" wire:model="ESP_id">
                    @foreach ($esp as $es )
                        <option value="{{$es->id}}">{{$es->description}}</option>
                    @endforeach
                </select>
                @error('ESP_id')
                <small class="error">{{$message}}</small>
                @enderror
            </div>

            <div class="form-group">
                <label for="TCS_id">ESP</label>
                <select name="TCS_id" wire:model="TCS_id">
                    @foreach ($tcs as $tc )
                        <option value="{{$tc->id}}">{{$tc->description}}</option>
                    @endforeach
                </select>
                @error('TCS_id')
                <small class="error">{{$message}}</small>
                @enderror
            </div>

            <div class="form-group">
                <label for="ACS_id">ACS</label>
                <select name="ACS_id" wire:model="ACS_id">
                    @foreach ($acs as $ac )
                        <option value="{{$ac->id}}">{{$ac->description}}</option>
                    @endforeach
                </select>
                @error('ACS_id')
                <small class="error">{{$message}}</small>
                @enderror
            </div>

            <div class="form-group">
                <label for="LDW_id">LDW</label>
                <select name="LDW_id" wire:model="LDW_id">
                    @foreach ($ldw as $ld )
                        <option value="{{$ld->id}}">{{$ld->description}}</option>
                    @endforeach
                </select>
                @error('LDW_id')
                <small class="error">{{$message}}</small>
                @enderror
            </div>

            <div class="form-group">
                <label for="CSS_id">CSS</label>
                <select name="CSS_id" wire:model="CSS_id">
                    @foreach ($css as $cs )
                        <option value="{{$cs->id}}">{{$cs->description}}</option>
                    @endforeach
                </select>
                @error('CSS_id')
                <small class="error">{{$message}}</small>
                @enderror
            </div>

            <div class="form-group s100-100 height-large">
                <label for="vehicleElectronicsComments">Σχόλια Ηλεκτρονικών:</label>
            <textarea name="vehicleElectronicsComments" wire:model='vehicleElectronicsComments' cols="30" rows="10"></textarea>
            @error('vehicleElectronicsComments')
            <small class="error">{{$message}}</small>
            @enderror
            <div>
        </div>  {{-- Category END --}}

        <div class="form-category"> <!-- FORM CATEGORY START-->
                <div class="form-group s3-4 float-l">
                    <label for="vehicleInformationSource_id">Πηγή Πληροφοριών</label>
                    <select name="vehicleInformationSource_id" wire:model='vehicleInformationSource_id' value="{{old('vehicleInformationSource_id')}}">
                        @foreach ($vehicleInformationSource as $vis )
                        <option value="{{$vis->id}}">{{$vis->description}}</option>
                        @endforeach
                    </select>
                    @error('vehicleInformationSource_id')
                    <small class="error">{{$message}}</small>
                    @enderror
                </div>
                <div class="form-group s1-4 float-r">
                    <label   for="vehicleISTrustLevel_id">Επιπεδο εμπιστοσύνης</label>
                    <select name="vehicleISTrustLevel_id" wire:model='vehicleISTrustLevel_id'>
                        @foreach ($vehicleISTrustLevel as $vistl )
                        <option value="{{$vistl->id}}">{{$vistl->description}}</option>
                        @endforeach
                    </select>
                    @error('vehicleISTrustLevel_id')
                    <small class="error">{{$message}}</small>
                    @enderror
                </div>

                <div class="form-group s100-100 height-large">
                    <label for="vehicleISTLDescription">Περιγραφή επιπέδου εμπιστοσύνης</label>
                    <textarea name="vehicleISTLDescription" wire:model='vehicleISTLDescription' id="vehicleISTLDescription"></textarea>
                    @error('vehicleISTLDescription')
                    <small class="error">{{$message}}</small>
                    @enderror
                </div>
        {{-- <h3 class="form-h3">  </h3> --}}
        <div class="form-group s3-4">
            <label for="vehicleInvestigationMethod_id">Μέθοδος Διερεύνησης</label>
            <select name="vehicleInvestigationMethod_id" wire:model='vehicleInvestigationMethod_id'>
                @foreach ($vehicleInvestigationMethod as $vim )
                <option value="{{$vim->id}}">{{$vim->description}}</option>
                @endforeach
            </select>
            @error('vehicleInvestigationMethod_id')
            <small class="error">{{$message}}</small>
            @enderror
        </div>

            <div class="form-group s1-4">
                <label for="vehicleIMTrustLevel_id">Επίπεδο Εμπιστοσύνης</label>
                <select name="vehicleIMTrustLevel_id" wire:model='vehicleIMTrustLevel_id' style="width: 100%;">
                    @foreach ($vehicleIMTrustLevel as $vimtl )
                    <option value="{{$vimtl->id}}">{{$vimtl->description}}</option>
                    @endforeach
                </select>
                @error('vehicleIMTrustLevel_id')
                <small class="error">{{$message}}</small>
                @enderror
            </div>

            <div class="form-group s100-100 height-large">
                <label for="vehicleIMTLDescription">Περιγραφή επιπέδου εμπιστοσύνης</label>
                <textarea name="vehicleIMTLDescription" wire:model='vehicleIMTLDescription' id="vehicleIMTLDescription"></textarea>
                @error('vehicleIMTLDescription')
                <small class="error">{{$message}}</small>
                @enderror
            </div>
            <input type="hidden" name="user_id" value={{$userid}}>
        </div> <!-- FORM CATEGORY END -->



        <div class="form-category"> <!-- FORM SECTION -->
        <div class="form-group s100-100">
            <label for="vehicleImage">Φόρτωση Εικόνων</label>
            <input type="file" name="vehicleImage" multiple="multiple" value="Αναζήτηση εικόνων">
            @error('vehicleImage')
            <small class="error">{{$message}}</small>
            @enderror
        </div>
        </div>
        </div>
        <div class="form-category"> <!-- FORM SECTION -->

            <input type="submit" class="form-input form-submit" value="ΟΛΟΚΛΗΡΩΣΗ ΕΓΓΡΑΦΗΣ">

        </div>
    </form>
    </div>
</div>
