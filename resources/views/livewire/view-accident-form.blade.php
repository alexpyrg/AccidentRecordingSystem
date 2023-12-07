<div>
    <div>
        {{-- @if(Auth::user()->role() < 2 && $accidentUserid != Auth::user()->id())
            @php
                return redirect('/');
            @endphp
        @endif --}}
        <div class="image-container">

            test image container

        </div>


        @extends('layout')

    @section('content')
    <div class="full-wd">
       <h3 class="create-accident-title">Εγγραφή του χρήστη: {{ $user->first_name . ' ' . $user->last_name }}</h3>

       <div class="data-input-form" >
        @csrf
        {{-- @if($step == 0) --}}

            <div class="form-category"> <!-- FORM CATEGORY START-->
                @error('all')
            <span><p>{{$message}}</p></span>
            @enderror
            <div class="form-group s1-3">
            <label for="caseNumber">Αριθμός Υπόθεσης</label>
            <input type="text" class="form-input" disabled name="caseNumber" styles="row-gap: 1;"  placeholder="Αριθμός Υπόθεσης" value={{$accident->id}}>

            {{-- <small class="InfoTip">Αυτό το πεδίο είναι ενδεικτικό.</small> --}}

            </div>
            @error('caseNumber')
            <span><p>{{$message}}</p></span>
            @enderror
            <div class="form-group form-spacer s1-3"> &nbsp;  </div>
            {{-- <div class="form-group  form-spacer fs-2 s1-4"> &nbsp;  </div> --}}

            <div class="form-group form-spacer s1-3"> &nbsp;  </div>

            <div class="form-group s1-3">
            <label for="accidentDate">Ημερομηνία ατυχήματος</label>
            <input type="datetime-local" min="1900-06-07T00:00" disabled value="{{$accident->accidentDate}}"  name="accidentDate" id="accidentDate">
            @error('accidentDate')
            <small class="error">{{$message}}</small>
            @enderror
            </div>
            <div class="form-group s1-3">
            <label for="accidentDay">Ημέρα ατυχήματος</label>
            <select name="accidentDay" class="" disabled id="accidentDay" disabled>

                @switch($accident->accidentDay)
                    @case(1)
                    <option value=1 selected>Δευτέρα</option>
                        @break
                    @case(2)
                    <option value=2 selected>Τρίτη</option>
                    @break
                    @case(3)
                    <option value=3 selected>Τετάρτη</option>
                    @break
                    @case(4)
                    <option value=4 selected>Πέμπτη</option>
                    @break
                    @case(5)
                    <option value=5 selected>Παρασκευή</option>
                    @break
                    @case(6)
                    <option value=6 selected>Σάββατο</option>
                    @break
                    @case(7)
                    <option value=7 selected>Κυριακή</option>
                    @break

                    @default
                    <option value=1 selected>Δευτέρα</option>
                @endswitch







            </select>
            @error('accidentDay')
            <small class="error">{{$message}}</small>
            @enderror
            </div>
            <div class="form-group s1-3">
            <label for="accidentExpertArrivalDate">Ημ/νία άφιξης εμπειρογνώμονα</label>
            <input type="datetime-local" name="accidentExpertArrivalDate" value="{{$accident->accidentExpertArrivalDate}}" disabled id="accidentExpertArrivalDate" min="">
            @error('accidentExpertArrivalDate')
            <small class="error">{{$message}}</small>
            @enderror
            </div>
            <div class="form-group s1-3">
            <label for="accidentLongitude">Γεωγραφικό μήκος</label>
            <input type="text" name="accidentLongitude" value="{{$accident->accidentLongitude}}" id="accidentLongitude" disabled value="0">
            @error('accidentLongitude')
            <small class="error">{{$message}}</small>
            @enderror
            </div>
            <div class="form-group s1-3">
            <label for="accidentLatitude">Γεωγραφικό Πλάτος</label>
            <input type="text" name="accidentLatitude" value="{{$accident->accidentLatitude}}" id="accidentLatitude" disabled value="0">
            @error('accidentLatitude')
            <small class="error">{{$message}}</small>
            @enderror
            </div>

            </div>{{--Form category END--}}

            <div class="form-category"> <!-- FORM CATEGORY START-->

            <div class="form-group s100-100">
                <label for="accidentCase">Υπόθεση</label>
                <input type="text" name="accidentCase" id="accidentCase" disabled value="{{$accident->accidentCase}}">
                @error('accidentCase')
                <small class="error">{{$message}}</small>
                @enderror
            </div>
            <div class="form-group s1-3">
                <label for="accidentSeverity_id">Σοβαρότητα Ατυχήματος</label>
                <select name="accidentSeverity_id" disabled>
                    @foreach ($accidentSeverities as $accidentSeverity )
                        @if($accident->accidentSeverity_id == $accidentSeverity->id)
                            <option value="{{$accidentSeverity->id}}" selected>{{$accidentSeverity->description}}</option>
                        @endif
                    @endforeach
                </select>
                @error('accidentSeverity_id')
                <small class="error">{{$message}}</small>
                @enderror
            </div>
            <div class="form-group s1-3">
                <label for="accidentNarcotics_id">Ναρκωτικές Ουσίες</label>
                <select name="accidentNarcotics_id" disabled>
                    @foreach ($accidentNarcotics as $accidentNarcotic )
                    @if($accident->accidentNarcotics_id == $accidentNarcotic->id)
                    <option value="{{$accidentNarcotic->id}}" selected>{{$accidentNarcotic->description}}</option>
                    @endif
                    @endforeach
                </select>
                @error('accidentNarcotics_id')
                <small class="error">{{$message}}</small>
                @enderror
            </div>

            <div class="form-group s1-3">
                <label for="accidentAlcohol_id">Αλκοόλ</label>
                <select name="accidentAlcohol_id" disabled>
                    @foreach ($accidentAlcohols as $accidentAlcohol )
                    @if($accident->accidentAlcohol_id == $accidentAlcohol->id)
                        <option value="{{$accidentAlcohol->id}}" selected>{{$accidentAlcohol->description}}</option>
                    @endif
                    @endforeach
                </select>
                @error('accidentAlcohol_id')
                <small class="error">{{$message}}</small>
                @enderror

            </div>
            <div class="form-group s1-3">
                <label for="accidentAbandonedVictim_id">Εγκατάλειψη Θυματος</label>
                <select name="accidentAbandonedVictim_id" disabled>

                    @foreach ($accidentAbandonedVictims as $accidentAbandonedVictim )
                    @if($accident->accidentAbandonedVictim_id == $accidentAbandonedVictim->id)
                        <option value="{{$accidentAbandonedVictim->id}}" selected>{{$accidentAbandonedVictim->description}}</option>
                    @endif
                        @endforeach
                </select>
                @error('accidentAbandonedVictim_id')
                <small class="error">{{$message}}</small>
                @enderror

            </div>
            <div class="form-group s1-3">
                <label for="accidentAnimalCollision_id">Σύγκρουση με ζώο</label>
                <select name="accidentAnimalCollision_id" disabled>
                    @foreach ($accidentAnimalCollisions as $accidentAnimalCollision )
                    @if($accident->accidentAnimalCollision_id == $accidentAnimalCollision->id)
                        <option value="{{$accidentAnimalCollision->id}}" selected>{{$accidentAnimalCollision->description}}</option>
                    @endif
                        @endforeach
                </select>
                @error('accidentAnimalCollision_id')
                <small class="error">{{$message}}</small>
                @enderror
            </div>

            <div class="form-group s1-3">
                <label for="accidentEventsNumber">Αριθμός ξεχοριστών συμβάντων</label>
                <input type="number" name="accidentEventsNumber" disabled value="{{$accident->accidentEventsNumber}}">
                @error('accidentEventsNumber')
                <small class="error">{{$message}}</small>
                @enderror
            </div>
            </div>{{--Form category END--}}



            <div class="form-category"> <!-- FORM CATEGORY START-->
            <div class="form-group s100-100 text-align-left">
                <label for="accidentGDV" class="s1-3 inlineblock ver-al-mid text-align-right padding-right-1r">Ταξινόμιση τύπου ατυχήματος</label>
                <input type="number" class="s1-3 inlineblock" name="accidentGDV" disabled value="{{$accident->accidentGDV}}">
                @error('accidentGDV')
                <small class="error">{{$message}}</small>
                @enderror
            </div>
            <div class="form-group s100-100">
                <label for="accidentGADAS_id">Ταξινόμιση GADAS</label>
                <select name="accidentGADAS_id" disabled>
                    @foreach ($accidentGADAs as $accidentGADA)
                    @if($accident->accidentGADAS_id == $accidentGADA->id)
                        <option value="{{$accidentGADA->id}}" selected>{{$accidentGADA->description}}</option>
                    @endif
                    @endforeach
                </select>
                @error('accidentGADAS_id')
                <small class="error">{{$message}}</small>
                @enderror
            </div>
            <div class="form-group s100-100">
                <label for="accidentEventSequence_id">Αλληλουχία Γεγονώτων</label>
                <select name="accidentEventSequence_id" disabled>
                    @foreach ($accidentEventSequences as $accidentEventSequence )
                    @if($accident->accidentEventSequence_id == $accidentEventSequence->id )
                        <option value="{{$accidentEventSequence->id}}" selected>{{$accidentEventSequence->description}}</option>
                    @endif
                        @endforeach
                </select>
                @error('accidentEventSequence_id')
                <small class="error">{{$message}}</small>
                @enderror
            </div>
            <div class="form-group s100-100">
                <label for="accidentFirstCollisionEvent_id"> Πρώτο Βλαβερό Συμβάν</label>
                <select name="accidentFirstCollisionEvent_id" disabled>
                    @foreach ($accidentFirstCollisionEvents as $accidentFirstCollisionEvent )
                    @if($accident->accidentFirstCollisionEvent_id == $accidentFirstCollisionEvent->id)
                        <option value="{{$accidentFirstCollisionEvent->id}}" selected>{{$accidentFirstCollisionEvent->description}}</option>
                    @endif
                        @endforeach
                </select>
                @error('accidentFirstCollisionEvent_id')
                <small class="error">{{$message}}</small>
                @enderror
            </div>

            <div class="form-group s100-100">
                <label for="accidentMostHarmfulEvent_id">Πιο βλαβερό συμβάν</label>
                <select name="accidentMostHarmfulEvent_id" disabled>
                    @foreach ($accidentMostHarmfulEvents as $accidentMostHarmfulEvent )
                    @if($accident->accidentMostHarmfulEvent_id == $accidentMostHarmfulEvent->id)
                    <option value="{{$accidentMostHarmfulEvent->id}}" selected>{{$accidentMostHarmfulEvent->description}}</option>
                    @endif
                    @endforeach
                </select>
                @error('accidentMostHarmfulEvent_id')
                <small class="error">{{$message}}</small>
                @enderror
            </div>
            <div class="form-group s100-100">
                <label for="accidentRelatedFactors_id">Σχετικοί παράγοντες με το ατύχημα</label>
                <select name="accidentRelatedFactors_id" disabled>
                    @foreach ($accidentRelatedFactors as $accidentRelatedFactor )
                    @if($accident->accidentRelatedFactors_id == $accidentRelatedFactor->id)
                        <option value="{{$accidentRelatedFactor->id}}" selected>{{$accidentRelatedFactor->description}}</option>
                    @endif
                        @endforeach
                </select>
                @error('accidentRelatedFactors_id')
                <small class="error">{{$message}}</small>
                @enderror
            </div>
            <div class="form-group s100-100 height-large">
                <label for="accidentSynopsis">Σύνοψχη Ατυχήματος</label>
                <textarea name="accidentSynopsis" disabled id="accidentSynopsis" >{{$accident->accidentSynopsis}}</textarea>
                @error('accidentSynopsis')
                <small class="error">{{$message}}</small>
                @enderror
            </div>
            </div>{{--Form category END--}}
            <div class="form-category"> <!-- FORM CATEGORY START-->
            <h3 class="form-h3">Συμμετέχοντες σε Τροχαίο</h3>
                <div class="form-group s100-100 center">
                    <label for="accidentTotalVehicles" class="s2-4 inlineblock float-l margin-b-2rem margin-t-2rem margin-r-2rem ver-al-sub">Συνολικός αριθμός οχημάτων που εμπλέκονται στο ατύχημα</label>
                    <input type="number" disabled value="{{$accident->accidentTotalVehicles}}" class="s1-4 inlineblock float-l margin-b-2rem margin-t-2rem" name="accidentTotalVehicles" value="0">
                    @error('accidentTotalVehicles')
                    <small class="error">{{$message}}</small>
                    @enderror
                </div>
                <div class="form-group s100-100">
                    <label class="vehicle-label s2-4" for="accidentVehicleSedan" >Λιμουζινα/sedan</label>
                    <input type="number" disabled class="vehicle-type s1-4" value="{{$accident->accidentVehicleSedan}}" name="accidentVehicleSedan" >
                    @error('accidentVehicleSedan')
                    <small class="error">{{$message}}</small>
                    @enderror
                    <label for="accidentVehicleVan" class="vehicle-label s2-4">Βαν</label>
                    <input type="number" disabled class="vehicle-type s1-4" value="{{$accident->accidentVehicleVan}}" name="accidentVehicleVan" >
                    @error('accidentVehicleVan')
                    <small class="error">{{$message}}</small>
                    @enderror
                </div>
                <div class="form-group s100-100">
                    <label for="accidentVehicleHatchback" class="vehicle-label s2-4">Κομπακτ/Hatchback</label>
                    <input type="number" disabled class="vehicle-type s1-4" value="{{$accident->accidentVehicleHatchback}}" name="accidentVehicleHatchback" >
                    @error('accidentVehicleHatchback')
                    <small class="error">{{$message}}</small>
                    @enderror
                    <label for="accidentVehicleTruck" class="vehicle-label s2-4">Φορτηγό</label>
                    <input type="number" disabled class="vehicle-type s1-4" value="{{$accident->accidentVehicleTruck}}" name="accidentVehicleTruck" >
                    @error('accidentVehicleTruck')
                    <small class="error">{{$message}}</small>
                    @enderror
                </div>
                <div class="form-group s100-100">
                    <label for="accidentVehicleCaravan" class="vehicle-label s2-4">Κομπι/Καραβαν</label>
                    <input type="number" disabled class="vehicle-type s1-4" value="{{$accident->accidentVehicleCaravan}}" name="accidentVehicleCaravan" >
                    @error('accidentVehicleCaravan')
                    <small class="error">{{$message}}</small>
                    @enderror
                    <label for="accidentVehicleTrailer" class="vehicle-label s2-4">Τρέιλερ</label>
                    <input type="number" disabled class="vehicle-type s1-4" value="{{$accident->accidentVehicleTrailer}}" name="accidentVehicleTrailer" >
                    @error('accidentVehicleTrailer')
                    <small class="error">{{$message}}</small>
                    @enderror
                </div>
                <div class="form-group s100-100">
                    <label for="accidentVehicleSport" class="vehicle-label s2-4">Κουπε/Σπορτ</label>
                    <input type="number" disabled class="vehicle-type s1-4" value="{{$accident->accidentVehicleSport}}" name="accidentVehicleSport" >
                    @error('accidentVehicleSport')
                    <small class="error">{{$message}}</small>
                    @enderror
                    <label for="accidentVehicleBus" class="vehicle-label s2-4">Λεωφορείο</label>
                    <input type="number" disabled class="vehicle-type s1-4" value="{{$accident->accidentVehicleBus}}" name="accidentVehicleBus">
                    @error('accidentVehicleBus')
                    <small class="error">{{$message}}</small>
                    @enderror
                </div>
                <div class="form-group s100-100">
                    <label for="accidentVehicleComercial" class="vehicle-label s2-4">Επαγγελματικό</label>
                    <input type="number" disabled class="vehicle-type s1-4" value="{{$accident->accidentVehicleComercial}}" name="accidentVehicleComercial">
                    @error('accidentVehicleComercial')
                    <small class="error">{{$message}}</small>
                    @enderror
                    <label for="accidentVehiclePickupTruck" class="vehicle-label s2-4">Αγροτικό</label>
                    <input type="number" disabled class="vehicle-type s1-4" value="{{$accident->accidentVehiclePickupTruck}}" name="accidentVehiclePickupTruck" >
                    @error('accidentVehiclePickupTruck')
                    <small class="error">{{$message}}</small>
                    @enderror
                </div>
                <div class="form-group s100-100">
                    <label for="accidentVehicleOffroad" class="vehicle-label s2-4">4χ4/Εκτός δρόμου</label>
                    <input type="number" disabled class="vehicle-type s1-4" value="{{$accident->accidentVehicleOffroad}}" name="accidentVehicleOffroad">
                    @error('accidentVehicleOffroad')
                    <small class="error">{{$message}}</small>
                    @enderror
                    <label for="accidentVehicleBike" class="vehicle-label s2-4">Μοτοσυκλέτα</label>
                    <input type="number" disabled class="vehicle-type s1-4" value="{{$accident->accidentVehicleBike}}" name="accidentVehicleBike" >
                    @error('accidentVehicleBike')
                    <small class="error">{{$message}}</small>
                    @enderror
                </div>
                <div class="form-group s100-100">
                    <label for="accidentVehicleSuv" class="vehicle-label s2-4">SUV</label>
                    <input type="number" disabled class="vehicle-type s1-4" value="{{$accident->accidentVehicleSuv}}" name="accidentVehicleSuv" >
                    @error('accidentVehicleSuv')
                    <small class="error">{{$message}}</small>
                    @enderror
                    <label for="accidentVehicleBicycle" class="vehicle-label s2-4">Ποδήλατο</label>
                    <input type="number" disabled class="vehicle-type s1-4" value="{{$accident->accidentVehicleBicycle}}" name="accidentVehicleBicycle" >
                    @error('accidentVehicleBicycle')
                    <small class="error">{{$message}}</small>
                    @enderror
                </div>
                <div class="form-group s100-100">
                    <label for="accidentVehicleElectric" class="vehicle-label s2-4">Ηλεκτρικό</label>
                    <input type="number" disabled class="vehicle-type s1-4" value="{{$accident->accidentVehicleElectric}}" name="accidentVehicleElectric" >
                    @error('accidentVehicleElectric')
                    <small class="error">{{$message}}</small>
                    @enderror
                    <label for="accidentVehicleOtherTwoWheeler" class="vehicle-label s2-4">Άλλο δίτροχο</label>
                    <input type="number" disabled class="vehicle-type s1-4" value="{{$accident->accidentVehicleOtherTwoWheeler}}" name="accidentVehicleOtherTwoWheeler" >
                    @error('accidentVehicleOtherTwoWheeler')
                    <small class="error">{{$message}}</small>
                    @enderror
                </div>
                <div class="form-group s100-100">
                    <label for="accidentVehicleAutonomous" class="vehicle-label s2-4">Αυτόνομο</label>
                    <input type="number" disabled class="vehicle-type s1-4" name="accidentVehicleAutonomous" value="{{$accident->accidentVehicleAutonomous}}" >
                    @error('accidentVehicleAutonomous')
                    <small class="error">{{$message}}</small>
                    @enderror
                    <label for="accidentVehicleTricycle" class="vehicle-label s2-4">Τρίτροχο</label>
                    <input type="number" disabled class="vehicle-type s1-4" name="accidentVehicleTricycle" value="{{$accident->accidentVehicleTricycle}}" >
                    @error('accidentVehicleTricycle')
                    <small class="error">{{$message}}</small>
                    @enderror
                </div>
                <div class="form-group s100-100">
                    <label for="accidentVehiclePedestrian" class="vehicle-label s2-4">Πεζός</label>
                    <input type="number" disabled class="vehicle-type s1-4" name="accidentVehiclePedestrian" value="{{$accident->accidentVehiclePedestrian}}">
                    @error('accidentVehiclePedestrian')
                    <small class="error">{{$message}}</small>
                    @enderror
                    <label for="accidentVehicleOther" class="vehicle-label s2-4">Άλλο</label>
                    <input type="number" disabled class="vehicle-type s1-4" name="accidentVehicleOther" value="{{$accident->accidentVehicleOther}}">
                    @error('accidentVehicleOther')
                    <small class="error">{{$message}}</small>
                    @enderror
                </div>
                <div class="form-group s100-100">
                    <label for="accidentVehicleUnknown" class="vehicle-label s2-4">Άγνωστο</label>
                    <input type="number" disabled class="vehicle-type s1-4" name="accidentVehicleUnknown" value="{{$accident->accidentVehicleUnknown}}" >
                    @error('accidentVehicleUnknown')
                    <small class="error">{{$message}}</small>
                    @enderror
                </div>

            </div>  {{-- Category END --}}

            <div class="form-category"> <!-- FORM CATEGORY START-->
                    <div class="form-group s3-4 float-l">
                        <label for="accidentInformationSource_id">Πηγή Πληροφοριών</label>
                        <select name="accidentInformationSource_id" disabled>

                            @foreach ($accidentInformationSources as $accidentInformationSource )
                            @if($accident->accidentInformationSource_id == $accidentInformationSource->id)
                            <option value="{{$accidentInformationSource->id}}" selected>{{$accidentInformationSource->description}}</option>
                            @endif
                            @endforeach
                        </select>
                        @error('accidentInromationSource_id')
                        <small class="error">{{$message}}</small>
                        @enderror
                    </div>
                    <div class="form-group s1-4 float-r">
                        <label for="accidentISTrustLevel_id">Επιπεδο εμπιστοσύνης</label>
                        <select name="accidentISTrustLevel_id" disabled>
                            @foreach ($accidentISTrustLevels as $accidentISTrustLevel )
                            @if($accident->accidentISTrustLevel_id == $accidentISTrustLevel->id)
                            <option value="{{$accidentISTrustLevel->id}}" selected>{{$accidentISTrustLevel->description}}</option>
                            @endif
                            @endforeach
                        </select>
                        @error('accidentISTrustLevel_id')
                        <small class="error">{{$message}}</small>
                        @enderror
                    </div>

                    <div class="form-group s100-100 height-large">
                        <label for="accidentISTLDescription">Περιγραφή επιπέδου εμπιστοσύνης</label>
                        <textarea name="accidentISTLDescription" disabled id="accidentISTLDescription">{{$accident->accidentISTLDescription}}</textarea>
                        @error('accidentISTLDescription')
                        <small class="error">{{$message}}</small>
                        @enderror
                    </div>
            {{-- <h3 class="form-h3">  </h3> --}}
            <div class="form-group s3-4">
                <label for="accidentInvestigationMethod_id">Μέθοδος Διερεύνησης</label>
                <select name="accidentInvestigationMethod_id" disabled>
                    @foreach ($accidentInvestigationMethods as $accidentInvestigationMethod )
                    @if($accident->accidentInvestigationMethod_id == $accidentInvestigationMethod->id)
                    <option value="{{$accidentInvestigationMethod->id}}" selected>{{$accidentInvestigationMethod->description}}</option>
                    @endif
                    @endforeach
                </select>
                @error('accidentInvestigationMethod_id')
                <small class="error">{{$message}}</small>
                @enderror
            </div>

                <div class="form-group s1-4">
                    <label for="accidentIMTrustLevel_id">Επίπεδο Εμπιστοσύνης</label>
                    <select name="accidentIMTrustLevel_id" disabled style="width: 100%;" >
                        @foreach ($accidentIMTrustLevels as $accidentIMTrustLevel )
                        @if($accident->accidentIMTrustLevel_id == $accidentIMTrustLevel->id)
                        <option value="{{$accidentIMTrustLevel->id}}" selected>{{$accidentIMTrustLevel->description}}</option>
                        @endif
                        @endforeach
                    </select>
                    @error('accidentIMTrustLevel_id')
                    <small class="error">{{$message}}</small>
                    @enderror
                </div>

                <div class="form-group s100-100 height-large">
                    <label for="accidentIMTLDescription">Περιγραφή επιπέδου εμπιστοσύνης</label>
                    <textarea name="accidentIMTLDescription" disabled id="accidentIMTLDescription">{{$accident->accidentIMTLDescription}}</textarea>
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

</div>
