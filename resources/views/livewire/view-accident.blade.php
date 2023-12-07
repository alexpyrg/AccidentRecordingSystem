<div>
    @if(Auth::user()->role() < 2 && $accidentUserid != Auth::user()->id())
        @php
            return redirect('/');
        @endphp
    @endif
    <div class="image-container">

        test image container

    </div>


    @extends('layout')

@section('content')
<div class="full-wd">
   <h3 class="create-accident-title">Προβολή Εγγραφής: {{ 'ΙΔ ΕΓΓΡΑΦΗΣ' }}</h3>

   <div class="data-input-form" >
    @csrf
    {{-- @if($step == 0) --}}

        <div class="form-category"> <!-- FORM CATEGORY START-->
            @error('all')
        <span><p>{{$message}}</p></span>
        @enderror
        <div class="form-group s1-3">
        <label for="caseNumber">Αριθμός Υπόθεσης</label>
        <input type="text" class="form-input" name="caseNumber" styles="row-gap: 1;"  placeholder="Αριθμός Υπόθεσης" value={{$caseNumber}}>

        <small class="InfoTip">Αυτό το πεδίο είναι ενδεικτικό.</small>

        </div>
        @error('caseNumber')
        <span><p>{{$message}}</p></span>
        @enderror
        <div class="form-group form-spacer s1-3"> &nbsp;  </div>
        {{-- <div class="form-group  form-spacer fs-2 s1-4"> &nbsp;  </div> --}}

        <div class="form-group s1-3">
        <label for="record-finished">Ολοκληρώθηκε η καταχώρηση;</label>
        <select type="text" class="form-input" name="record-finished" wire:model.lazy="finished" placeholder="Done">
            <option value=0>Όχι</option>
            <option value=1>Ναί</option>
        </select>
        @error('record-finished')
        <small class="error">{{$message}}</small>
        @enderror
        </div>

        <div class="form-group s1-3">
        <label for="accidentDate">Ημερομηνία ατυχήματος</label>
        <input type="datetime-local" min="1900-06-07T00:00"  name="accidentDate" id="accidentDate">
        @error('accidentDate')
        <small class="error">{{$message}}</small>
        @enderror
        </div>
        <div class="form-group s1-3">
        <label for="accidentDay">Ημέρα ατυχήματος</label>
        <select name="accidentDay" class="" id="accidentDay">
            <option value=0>Επιλέξτε...</option>
            <option value=1>Δευτέρα</option>
            <option value=2>Τρίτη</option>
            <option value=3>Τετάρτη</option>
            <option value=4>Πέμπτη</option>
            <option value=5>Παρασκευή</option>
            <option value=6>Σάββατο</option>
            <option value=7>Κυριακή</option>
        </select>
        @error('accidentDay')
        <small class="error">{{$message}}</small>
        @enderror
        </div>
        <div class="form-group s1-3">
        <label for="accidentExpertArrivalDate">Ημ/νία άφιξης εμπειρογνώμονα</label>
        <input type="datetime-local" name="accidentExpertArrivalDate" id="accidentExpertArrivalDate" min="">
        @error('accidentExpertArrivalDate')
        <small class="error">{{$message}}</small>
        @enderror
        </div>
        <div class="form-group s1-3">
        <label for="accidentLongitude">Γεωγραφικό μήκος</label>
        <input type="text" name="accidentLongitude" id="accidentLongitude" value="0">
        @error('accidentLongitude')
        <small class="error">{{$message}}</small>
        @enderror
        </div>
        <div class="form-group s1-3">
        <label for="accidentLatitude">Γεωγραφικό Πλάτος</label>
        <input type="text" name="accidentLatitude" id="accidentLatitude" value="0">
        @error('accidentLatitude')
        <small class="error">{{$message}}</small>
        @enderror
        </div>

        </div>{{--Form category END--}}

        <div class="form-category"> <!-- FORM CATEGORY START-->

        <div class="form-group s100-100">
            <label for="accidentCase">Υπόθεση</label>
            <input type="text" name="accidentCase" id="accidentCase" value="{{$caseNumber}}">
            @error('accidentCase')
            <small class="error">{{$message}}</small>
            @enderror
        </div>
        <div class="form-group s1-3">
            <label for="accidentSeverity_id">Σοβαρότητα Ατυχήματος</label>
            <select name="accidentSeverity_id">
                @foreach ($accidentSeverities as $accidentSeverity )
                    <option value="{{$accidentSeverity->id}}">{{$accidentSeverity->description}}</option>
                @endforeach
            </select>
            @error('accidentSeverity_id')
            <small class="error">{{$message}}</small>
            @enderror
        </div>
        <div class="form-group s1-3">
            <label for="accidentNarcotics_id">Ναρκωτικές Ουσίες</label>
            <select name="accidentNarcotics_id">
                @foreach ($accidentNarcotics as $accidentNarcotic )
                <option value="{{$accidentNarcotic->id}}">{{$accidentNarcotic->description}}</option>
                @endforeach
            </select>
            @error('accidentNarcotics_id')
            <small class="error">{{$message}}</small>
            @enderror
        </div>

        <div class="form-group s1-3">
            <label for="accidentAlcohol_id">Αλκοόλ</label>
            <select name="accidentAlcohol_id">
                @foreach ($accidentAlcohols as $accidentAlcohol )
                    <option value="{{$accidentAlcohol->id}}">{{$accidentAlcohol->description}}</option>
                @endforeach
            </select>
            @error('accidentAlcohol_id')
            <small class="error">{{$message}}</small>
            @enderror

        </div>
        <div class="form-group s1-3">
            <label for="accidentAbandonedVictim_id">Εγκατάλειψη Θυματος</label>
            <select name="accidentAbandonedVictim_id">
                @foreach ($accidentAbandonedVictims as $accidentAbandonedVictim )
                    <option value="{{$accidentAbandonedVictim->id}}">{{$accidentAbandonedVictim->description}}</option>
                @endforeach
            </select>
            @error('accidentAbandonedVictim_id')
            <small class="error">{{$message}}</small>
            @enderror

        </div>
        <div class="form-group s1-3">
            <label for="accidentAnimalCollision_id">Σύγκρουση με ζώο</label>
            <select name="accidentAnimalCollision_id">
                @foreach ($accidentAnimalCollisions as $accidentAnimalCollision )
                    <option value="{{$accidentAnimalCollision->id}}">{{$accidentAnimalCollision->description}}</option>
                @endforeach
            </select>
            @error('accidentAnimalCollision_id')
            <small class="error">{{$message}}</small>
            @enderror
        </div>

        <div class="form-group s1-3">
            <label for="accidentEventsNumber">Αριθμός ξεχοριστών συμβάντων</label>
            <input type="number" name="accidentEventsNumber">
            @error('accidentEventsNumber')
            <small class="error">{{$message}}</small>
            @enderror
        </div>
        </div>{{--Form category END--}}



        <div class="form-category"> <!-- FORM CATEGORY START-->
        <div class="form-group s100-100 text-align-left">
            <label for="accidentGDV" class="s1-3 inlineblock ver-al-mid text-align-right padding-right-1r">Ταξινόμιση τύπου ατυχήματος</label>
            <input type="number" class="s1-3 inlineblock" name="accidentGDV">
            @error('accidentGDV')
            <small class="error">{{$message}}</small>
            @enderror
        </div>
        <div class="form-group s100-100">
            <label for="accidentGADAS_id">Ταξινόμιση GADAS</label>
            <select name="accidentGADAS_id">
                @foreach ($accidentGADAs as $accidentGADA)
                    <option value="{{$accidentGADA->id}}">{{$accidentGADA->description}}</option>
                @endforeach
            </select>
            @error('accidentGADAS_id')
            <small class="error">{{$message}}</small>
            @enderror
        </div>
        <div class="form-group s100-100">
            <label for="accidentEventSequence_id">Αλληλουχία Γεγονώτων</label>
            <select name="accidentEventSequence_id">
                @foreach ($accidentEventSequences as $accidentEventSequence )
                    <option value="{{$accidentEventSequence->id}}">{{$accidentEventSequence->description}}</option>
                @endforeach
            </select>
            @error('accidentEventSequence_id')
            <small class="error">{{$message}}</small>
            @enderror
        </div>
        <div class="form-group s100-100">
            <label for="accidentFirstCollisionEvent_id"> Πρώτο Βλαβερό Συμβάν</label>
            <select name="accidentFirstCollisionEvent_id">
                @foreach ($accidentFirstCollisionEvents as $accidentFirstCollisionEvent )
                    <option value="{{$accidentFirstCollisionEvent->id}}">{{$accidentFirstCollisionEvent->description}}</option>
                @endforeach
            </select>
            @error('accidentFirstCollisionEvent_id')
            <small class="error">{{$message}}</small>
            @enderror
        </div>

        <div class="form-group s100-100">
            <label for="accidentMostHarmfulEvent_id">Πιο βλαβερό συμβάν</label>
            <select name="accidentMostHarmfulEvent_id">
                @foreach ($accidentMostHarmfulEvents as $accidentMostHarmfulEvent )
                <option value="{{$accidentMostHarmfulEvent->id}}">{{$accidentMostHarmfulEvent->description}}</option>
                @endforeach
            </select>
            @error('accidentMostHarmfulEvent_id')
            <small class="error">{{$message}}</small>
            @enderror
        </div>
        <div class="form-group s100-100">
            <label for="accidentRelatedFactors_id">Σχετικοί παράγοντες με το ατύχημα</label>
            <select name="accidentRelatedFactors_id">
                @foreach ($accidentRelatedFactors as $accidentRelatedFactor )
                    <option value="{{$accidentRelatedFactor->id}}">{{$accidentRelatedFactor->description}}</option>
                @endforeach
            </select>
            @error('accidentRelatedFactors_id')
            <small class="error">{{$message}}</small>
            @enderror
        </div>
        <div class="form-group s100-100 height-large">
            <label for="accidentSynopsis">Σύνοψχη Ατυχήματος</label>
            <textarea name="accidentSynopsis" id="accidentSynopsis"></textarea>
            @error('accidentSynopsis')
            <small class="error">{{$message}}</small>
            @enderror
        </div>
        </div>{{--Form category END--}}
        <div class="form-category"> <!-- FORM CATEGORY START-->
        <h3 class="form-h3">Συμμετέχοντες σε Τροχαίο</h3>
            <div class="form-group s100-100 center">
                <label for="accidentTotalVehicles" class="s2-4 inlineblock float-l margin-b-2rem margin-t-2rem margin-r-2rem ver-al-sub">Συνολικός αριθμός οχημάτων που εμπλέκονται στο ατύχημα</label>
                <input type="number" class="s1-4 inlineblock float-l margin-b-2rem margin-t-2rem" name="accidentTotalVehicles" value="0">
                @error('accidentTotalVehicles')
                <small class="error">{{$message}}</small>
                @enderror
            </div>
            <div class="form-group s100-100">
                <label class="vehicle-label s2-4" for="accidentVehicleSedan" >Λιμουζινα/sedan</label>
                <input type="number" class="vehicle-type s1-4" name="accidentVehicleSedan" value="0">
                @error('accidentVehicleSedan')
                <small class="error">{{$message}}</small>
                @enderror
                <label for="accidentVehicleVan" class="vehicle-label s2-4">Βαν</label>
                <input type="number" class="vehicle-type s1-4" name="accidentVehicleVan" value="0">
                @error('accidentVehicleVan')
                <small class="error">{{$message}}</small>
                @enderror
            </div>
            <div class="form-group s100-100">
                <label for="accidentVehicleHatchback" class="vehicle-label s2-4">Κομπακτ/Hatchback</label>
                <input type="number" class="vehicle-type s1-4" name="accidentVehicleHatchback" value="0">
                @error('accidentVehicleHatchback')
                <small class="error">{{$message}}</small>
                @enderror
                <label for="accidentVehicleTruck" class="vehicle-label s2-4">Φορτηγό</label>
                <input type="number" class="vehicle-type s1-4" name="accidentVehicleTruck" value="0">
                @error('accidentVehicleTruck')
                <small class="error">{{$message}}</small>
                @enderror
            </div>
            <div class="form-group s100-100">
                <label for="accidentVehicleCaravan" class="vehicle-label s2-4">Κομπι/Καραβαν</label>
                <input type="number" class="vehicle-type s1-4" name="accidentVehicleCaravan" value="0">
                @error('accidentVehicleCaravan')
                <small class="error">{{$message}}</small>
                @enderror
                <label for="accidentVehicleTrailer" class="vehicle-label s2-4">Τρέιλερ</label>
                <input type="number" class="vehicle-type s1-4" name="accidentVehicleTrailer" value="0">
                @error('accidentVehicleTrailer')
                <small class="error">{{$message}}</small>
                @enderror
            </div>
            <div class="form-group s100-100">
                <label for="accidentVehicleSport" class="vehicle-label s2-4">Κουπε/Σπορτ</label>
                <input type="number" class="vehicle-type s1-4" name="accidentVehicleSport" value="0">
                @error('accidentVehicleSport')
                <small class="error">{{$message}}</small>
                @enderror
                <label for="accidentVehicleBus" class="vehicle-label s2-4">Λεωφορείο</label>
                <input type="number" class="vehicle-type s1-4" name="accidentVehicleBus" value="0">
                @error('accidentVehicleBus')
                <small class="error">{{$message}}</small>
                @enderror
            </div>
            <div class="form-group s100-100">
                <label for="accidentVehicleComercial" class="vehicle-label s2-4">Επαγγελματικό</label>
                <input type="number" class="vehicle-type s1-4" name="accidentVehicleComercial" value="0">
                @error('accidentVehicleComercial')
                <small class="error">{{$message}}</small>
                @enderror
                <label for="accidentVehiclePickupTruck" class="vehicle-label s2-4">Αγροτικό</label>
                <input type="number" class="vehicle-type s1-4" name="accidentVehiclePickupTruck" value="0">
                @error('accidentVehiclePickupTruck')
                <small class="error">{{$message}}</small>
                @enderror
            </div>
            <div class="form-group s100-100">
                <label for="accidentVehicleOffroad" class="vehicle-label s2-4">4χ4/Εκτός δρόμου</label>
                <input type="number" class="vehicle-type s1-4" name="accidentVehicleOffroad" value="0">
                @error('accidentVehicleOffroad')
                <small class="error">{{$message}}</small>
                @enderror
                <label for="accidentVehicleBike" class="vehicle-label s2-4">Μοτοσυκλέτα</label>
                <input type="number" class="vehicle-type s1-4" name="accidentVehicleBike" value="0">
                @error('accidentVehicleBike')
                <small class="error">{{$message}}</small>
                @enderror
            </div>
            <div class="form-group s100-100">
                <label for="accidentVehicleSuv" class="vehicle-label s2-4">SUV</label>
                <input type="number" class="vehicle-type s1-4" name="accidentVehicleSuv" value="0">
                @error('accidentVehicleSuv')
                <small class="error">{{$message}}</small>
                @enderror
                <label for="accidentVehicleBicycle" class="vehicle-label s2-4">Ποδήλατο</label>
                <input type="number" class="vehicle-type s1-4" name="accidentVehicleBicycle" value="0">
                @error('accidentVehicleBicycle')
                <small class="error">{{$message}}</small>
                @enderror
            </div>
            <div class="form-group s100-100">
                <label for="accidentVehicleElectric" class="vehicle-label s2-4">Ηλεκτρικό</label>
                <input type="number" class="vehicle-type s1-4" name="accidentVehicleElectric" value="0">
                @error('accidentVehicleElectric')
                <small class="error">{{$message}}</small>
                @enderror
                <label for="accidentVehicleOtherTwoWheeler" class="vehicle-label s2-4">Άλλο δίτροχο</label>
                <input type="number" class="vehicle-type s1-4" name="accidentVehicleOtherTwoWheeler" value="0">
                @error('accidentVehicleOtherTwoWheeler')
                <small class="error">{{$message}}</small>
                @enderror
            </div>
            <div class="form-group s100-100">
                <label for="accidentVehicleAutonomous" class="vehicle-label s2-4">Αυτόνομο</label>
                <input type="number" class="vehicle-type s1-4" name="accidentVehicleAutonomous" value="0">
                @error('accidentVehicleAutonomous')
                <small class="error">{{$message}}</small>
                @enderror
                <label for="accidentVehicleTricycle" class="vehicle-label s2-4">Τρίτροχο</label>
                <input type="number" class="vehicle-type s1-4" name="accidentVehicleTricycle" value="0">
                @error('accidentVehicleTricycle')
                <small class="error">{{$message}}</small>
                @enderror
            </div>
            <div class="form-group s100-100">
                <label for="accidentVehiclePedestrian" class="vehicle-label s2-4">Πεζός</label>
                <input type="number" class="vehicle-type s1-4" name="accidentVehiclePedestrian" value="0">
                @error('accidentVehiclePedestrian')
                <small class="error">{{$message}}</small>
                @enderror
                <label for="accidentVehicleOther" class="vehicle-label s2-4">Άλλο</label>
                <input type="number" class="vehicle-type s1-4" name="accidentVehicleOther" value="0">
                @error('accidentVehicleOther')
                <small class="error">{{$message}}</small>
                @enderror
            </div>
            <div class="form-group s100-100">
                <label for="accidentVehicleUnknown" class="vehicle-label s2-4">Άγνωστο</label>
                <input type="number" class="vehicle-type s1-4" name="accidentVehicleUnknown" value="0">
                @error('accidentVehicleUnknown')
                <small class="error">{{$message}}</small>
                @enderror
            </div>

        </div>  {{-- Category END --}}

        <div class="form-category"> <!-- FORM CATEGORY START-->
                <div class="form-group s3-4 float-l">
                    <label for="accidentInformationSource_id">Πηγή Πληροφοριών</label>
                    <select name="accidentInformationSource_id">
                        @foreach ($accidentInformationSources as $accidentInformationSource )
                        <option value="{{$accidentInformationSource->id}}">{{$accidentInformationSource->description}}</option>
                        @endforeach
                    </select>
                    @error('accidentInromationSource_id')
                    <small class="error">{{$message}}</small>
                    @enderror
                </div>
                <div class="form-group s1-4 float-r">
                    <label for="accidentISTrustLevel_id">Επιπεδο εμπιστοσύνης</label>
                    <select name="accidentISTrustLevel_id">
                        @foreach ($accidentISTrustLevels as $accidentISTrustLevel )
                        <option value="{{$accidentISTrustLevel->id}}">{{$accidentISTrustLevel->description}}</option>
                        @endforeach
                    </select>
                    @error('accidentISTrustLevel_id')
                    <small class="error">{{$message}}</small>
                    @enderror
                </div>

                <div class="form-group s100-100 height-large">
                    <label for="accidentISTLDescription">Περιγραφή επιπέδου εμπιστοσύνης</label>
                    <textarea name="accidentISTLDescription" id="accidentISTLDescription"></textarea>
                    @error('accidentISTLDescription')
                    <small class="error">{{$message}}</small>
                    @enderror
                </div>
        {{-- <h3 class="form-h3">  </h3> --}}
        <div class="form-group s3-4">
            <label for="accidentInvestigationMethod_id">Μέθοδος Διερεύνησης</label>
            <select name="accidentInvestigationMethod_id">
                @foreach ($accidentInvestigationMethods as $accidentInvestigationMethod )
                <option value="{{$accidentInvestigationMethod->id}}">{{$accidentInvestigationMethod->description}}</option>
                @endforeach
            </select>
            @error('accidentInvestigationMethod_id')
            <small class="error">{{$message}}</small>
            @enderror
        </div>

            <div class="form-group s1-4">
                <label for="accidentIMTrustLevel_id">Επίπεδο Εμπιστοσύνης</label>
                <select name="accidentIMTrustLevel_id" style="width: 100%;">
                    @foreach ($accidentIMTrustLevels as $accidentIMTrustLevel )
                    <option value="{{$accidentIMTrustLevel->id}}">{{$accidentIMTrustLevel->description}}</option>
                    @endforeach
                </select>
                @error('accidentIMTrustLevel_id')
                <small class="error">{{$message}}</small>
                @enderror
            </div>

            <div class="form-group s100-100 height-large">
                <label for="accidentIMTLDescription">Περιγραφή επιπέδου εμπιστοσύνης</label>
                <textarea name="accidentIMTLDescription" id="accidentIMTLDescription"></textarea>
                @error('accidentIMTLDescription')
                <small class="error">{{$message}}</small>
                @enderror
            </div>
            <input type="hidden" name="user_id" value={{$userid}}>
        </div> <!-- FORM CATEGORY END -->

        </div>

    </div>
    </div>

    @endsection


</div>
