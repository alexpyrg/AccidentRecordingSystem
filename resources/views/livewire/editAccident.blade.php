@extends('layout')

@section('content')
</head>
<body>
<div class="full-wd">
   <h3 class="create-accident-title">ΕΠΕΞΕΡΓΑΣΙΑ ΕΓΓΡΑΦΗΣ</h3>

   <form method="POST" action="/accident/edit/{{$accident->id}}" class="data-input-form" enctype="multipart/form-data">
    @csrf
    @method('PUT')
    {{-- @if($step == 0) --}}
    {{dd($accident)}}
        <div class="form-category"> <!-- FORM CATEGORY START-->
            @error('all')
        <span><p>{{$message}}</p></span>
        @enderror
        <div class="form-group s1-3">
        <label for="caseNumber">Αριθμός Υπόθεσης</label>
        <input type="text" class="form-input" name="caseNumber" styles="row-gap: 1;"  placeholder="Αριθμός Υπόθεσης" value={{$accident->caseNumber}}>

        <small class="InfoTip">Αυτό το πεδίο είναι ενδεικτικό.</small>

        </div>
        @error('caseNumber')
        <span><p>{{$message}}</p></span>
        @enderror
        <div class="form-group form-spacer s1-3"> &nbsp;  </div>
        {{-- <div class="form-group  form-spacer fs-2 s1-4"> &nbsp;  </div> --}}

        <div class="form-group s1-3">
        <label for="accidentDate">Ημερομηνία ατυχήματος</label>
        <input type="datetime-local" min="1900-06-07T00:00"  name="accidentDate" id="accidentDate" value="{{$accident->accidentDate}}">
        @error('accidentDate')
        <small class="error">{{$message}}</small>
        @enderror
        </div>
        <div class="form-group s1-3">
        <label for="accidentDay">Ημέρα ατυχήματος</label>
        <select name="accidentDay" class="" id="accidentDay" value="">
            <option value=0 @php if($accident->accidentDay == 0) echo 'selected="selected"'; @endphp>Επιλέξτε...</option>
            <option value=1 @php if($accident->accidentDay == 1) echo 'selected="selected"'; @endphp>Δευτέρα</option>
            <option value=2 @php if($accident->accidentDay == 2) echo 'selected="selected"'; @endphp>Τρίτη</option>
            <option value=3 @php if($accident->accidentDay == 3) echo 'selected="selected"'; @endphp>Τετάρτη</option>
            <option value=4 @php if($accident->accidentDay == 4) echo 'selected="selected"'; @endphp>Πέμπτη</option>
            <option value=5 @php if($accident->accidentDay == 5) echo 'selected="selected"'; @endphp>Παρασκευή</option>
            <option value=6 @php if($accident->accidentDay == 6) echo 'selected="selected"'; @endphp>Σάββατο</option>
            <option value=7 @php if($accident->accidentDay == 7) echo 'selected="selected"'; @endphp>Κυριακή</option>
        </select>
        @error('accidentDay')
        <small class="error">{{$message}}</small>
        @enderror
        </div>
        <div class="form-group s1-3">
        <label for="accidentExpertArrivalDate">Ημ/νία άφιξης εμπειρογνώμονα</label>
        <input type="datetime-local" name="accidentExpertArrivalDate" id="accidentExpertArrivalDate" value="{{$accident->accidentExpertArrivalDate}}">
        @error('accidentExpertArrivalDate')
        <small class="error">{{$message}}</small>
        @enderror
        </div>
        <div class="form-group s1-3">
        <label for="accidentLongitude">Γεωγραφικό μήκος</label>
        <input type="text" name="accidentLongitude" id="accidentLongitude" value="{{$accident->accidentLongitude}}">
        @error('accidentLongitude')
        <small class="error">{{$message}}</small>
        @enderror
        </div>
        <div class="form-group s1-3">
        <label for="accidentLatitude">Γεωγραφικό Πλάτος</label>
        <input type="text" name="accidentLatitude" id="accidentLatitude" value="{{$accident->accidentLatitude}}">
        @error('accidentLatitude')
        <small class="error">{{$message}}</small>
        @enderror
        </div>

        </div>{{--Form category END--}}






        <div class="form-category"> <!-- FORM CATEGORY START-->

        <div class="form-group s100-100">
            <label for="accidentCase">Υπόθεση</label>
            <input type="text" name="accidentCase" id="accidentCase" value="{{$accident->accidentCase}}">
            @error('accidentCase')
            <small class="error">{{$message}}</small>
            @enderror
        </div>
        <div class="form-group s1-3">
            <label for="accidentSeverity">Σοβαρότητα Ατυχήματος</label>
            <select name="accidentSeverity">
                @foreach ($accidentSeverities as $accidentSeverity )
                    <option value="{{$accidentSeverity->id}}" @php if($accident->accidentSeverity == $accidentSeverity->id) echo 'selected="selected"'; @endphp>{{$accidentSeverity->description}}</option>
                @endforeach
            </select>
            @error('accidentSeverity')
            <small class="error">{{$message}}</small>
            @enderror
        </div>
        <div class="form-group s1-3">
            <label for="accidentNarcotics">Ναρκωτικές Ουσίες</label>
            <select name="accidentNarcotics">
                @foreach ($accidentNarcotics as $accidentNarcotic )
                <option value="{{$accidentNarcotic->id}}" @php if($accident->accidentNarcotics == $accidentNarcotic->id) echo 'selected="selected"'; @endphp>{{$accidentNarcotic->description}}</option>
                @endforeach
            </select>
            @error('accidentNarcotics')
            <small class="error">{{$message}}</small>
            @enderror
        </div>

        <div class="form-group s1-3">
            <label for="accidentAlcohol">Αλκοόλ</label>
            <select name="accidentAlcohol">
                @foreach ($accidentAlcohols as $accidentAlcohol )
                    <option value="{{$accidentAlcohol->id}}" @php if($accident->accidentAlcohol == $accidentAlcohol->id) echo 'selected="selected"'; @endphp>{{$accidentAlcohol->description}}</option>
                @endforeach
            </select>
            @error('accidentAlcohol')
            <small class="error">{{$message}}</small>
            @enderror

        </div>
        <div class="form-group s1-3">
            <label for="accidentAbandonedVictim">Εγκατάλειψη Θυματος</label>
            <select name="accidentAbandonedVictim">
                @foreach ($accidentAbandonedVictims as $accidentAbandonedVictim )
                    <option value="{{$accidentAbandonedVictim->id}}" @php if($accident->accidentAbandonedVictim == $accidentAbandonedVictim->id) echo 'selected="selected"'; @endphp>{{$accidentAbandonedVictim->description}}</option>
                @endforeach
            </select>
            @error('accidentAbandonedVictim')
            <small class="error">{{$message}}</small>
            @enderror

        </div>
        <div class="form-group s1-3">
            <label for="accidentAnimalCollision">Σύγκρουση με ζώο</label>
            <select name="accidentAnimalCollision">
                @foreach ($accidentAnimalCollisions as $accidentAnimalCollision )
                    <option value="{{$accidentAnimalCollision->id}}" @php if($accident->accidentAnimalCollision == $accidentAnimalCollision->id) echo 'selected="selected"'; @endphp>{{$accidentAnimalCollision->description}}</option>
                @endforeach
            </select>
            @error('accidentAnimalCollision')
            <small class="error">{{$message}}</small>
            @enderror
        </div>

        <div class="form-group s1-3">
            <label for="accidentEventsNumber">Αριθμός ξεχοριστών συμβάντων</label>
            <input type="number" name="accidentEventsNumber" value="{{$accident->accidentEventsNumber}}">
            @error('accidentEventsNumber')
            <small class="error">{{$message}}</small>
            @enderror
        </div>
        </div>{{--Form category END--}}



        <div class="form-category"> <!-- FORM CATEGORY START-->
        <div class="form-group s100-100 text-align-right">
            <label for="accidentGDV" class="s1-3 inline">Ταξινόμιση τύπου ατυχήματος</label>
            <input type="number" class="s2-3 inline" name="accidentGDV" value="{{$accident->accidentGDV}}">
            @error('accidentGDV')
            <small class="error">{{$message}}</small>
            @enderror
        </div>
        <div class="form-group s100-100">
            <label for="accidentGADAS">Ταξινόμιση GADAS</label>
            <select name="accidentGADAS">
                @foreach ($accidentGADAs as $accidentGADA)
                    <option value="{{$accidentGADA->id}}" @php if($accident->accidentGADAS == $accidentGADA->id) echo 'selected="selected"'; @endphp>{{$accidentGADA->description}}</option>
                @endforeach
            </select>
            @error('accidentGADAS')
            <small class="error">{{$message}}</small>
            @enderror
        </div>
        <div class="form-group s100-100">
            <label for="accidentEventSequence">Αλληλουχία Γεγονώτων</label>
            <select name="accidentEventSequence">
                @foreach ($accidentEventSequences as $accidentEventSequence )
                    <option value="{{$accidentEventSequence->id}}" @php if($accident->accidentEventSequence == $accidentEventSequence->id) echo 'selected="selected"'; @endphp>{{$accidentEventSequence->description}}</option>
                @endforeach
            </select>
            @error('accidentEventSequence')
            <small class="error">{{$message}}</small>
            @enderror
        </div>
        <div class="form-group s100-100">
            <label for="accidentFirstCollisionEvent"> Πρώτο Βλαβερό Συμβάν</label>
            <select name="accidentFirstCollisionEvent">
                @foreach ($accidentFirstCollisionEvents as $accidentFirstCollisionEvent )
                    <option value="{{$accidentFirstCollisionEvent->id}}" @php if($accident->accidentFirstCollisionEvent == $accidentFirstCollisionEvent->id) echo 'selected="selected"'; @endphp>{{$accidentFirstCollisionEvent->description}}</option>
                @endforeach
            </select>
            @error('accidentFirstCollisionEvent')
            <small class="error">{{$message}}</small>
            @enderror
        </div>

        <div class="form-group s100-100">
            <label for="accidentMostHarmfulEvent">Πιο βλαβερό συμβάν</label>
            <select name="accidentMostHarmfulEvent">
                @foreach ($accidentMostHarmfulEvents as $accidentMostHarmfulEvent )
                <option value="{{$accidentMostHarmfulEvent->id}}" @php if($accident->accidentMostHarmfulEvent == $accidentMostHarmfulEvent->id) echo 'selected="selected"'; @endphp>{{$accidentMostHarmfulEvent->description}}</option>
                @endforeach
            </select>
            @error('accidentMostHarmfulEvent')
            <small class="error">{{$message}}</small>
            @enderror
        </div>
        <div class="form-group s100-100">
            <label for="accidentRelatedFactors">Σχετικοί παράγοντες με το ατύχημα</label>
            <select name="accidentRelatedFactors">
                @foreach ($accidentRelatedFactors as $accidentRelatedFactor )
                    <option value="{{$accidentRelatedFactor->id}}" @php if($accident->accidentRelatedFactors == $accidentRelatedFactor->id) echo 'selected="selected"'; @endphp>{{$accidentRelatedFactor->description}}</option>
                @endforeach
            </select>
            @error('accidentRelatedFactors')
            <small class="error">{{$message}}</small>
            @enderror
        </div>
        <div class="form-group s100-100 height-large">
            <label for="accidentSynopsis">Σύνοψχη Ατυχήματος</label>
            <textarea name="accidentSynopsis" id="accidentSynopsis" value="">{{$accident->accidentSynopsis}}</textarea>
            @error('accidentSynopsis')
            <small class="error">{{$message}}</small>
            @enderror
        </div>
        </div>{{--Form category END--}}
        <div class="form-category"> <!-- FORM CATEGORY START-->
        <h3 class="form-h3">Συμμετέχοντες σε Τροχαίο</h3>
            <div class="form-group s100-100 center">
                <label for="accidentTotalVehicles" class="s2-4 inlineblock float-l margin-b-2rem margin-t-2rem margin-r-2rem">Συνολικός αριθμός οχημάτων που εμπλέκονται στο ατύχημα</label>
                <input type="number" class="s1-4 inlineblock float-l margin-b-2rem margin-t-2rem" name="accidentTotalVehicles" value="{{$accident->accidentTotalVehicles}}">
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
                    <label for="accidentInformationSource">Πηγή Πληροφοριών</label>
                    <select name="accidentInformationSource" value="{{old('accidentInformationSource')}}">
                        @foreach ($accidentInformationSources as $accidentInformationSource )
                        <option value="{{$accidentInformationSource->id}}" @php if($accident->accidentInformationSource == $accidentInformationSource->id) echo 'selected="selected"'; @endphp>{{$accidentInformationSource->description}}</option>
                        @endforeach
                    </select>
                    @error('accidentInromationSource')
                    <small class="error">{{$message}}</small>
                    @enderror
                </div>
                <div class="form-group s1-4 float-r">
                    <label for="accidentISTrustLevel">Επιπεδο εμπιστοσύνης</label>
                    <select name="accidentISTrustLevel">
                        @foreach ($accidentISTrustLevels as $accidentISTrustLevel )
                        <option value="{{$accidentISTrustLevel->id}}" @php if($accident->accidentISTrustLevel == $accidentISTrustLevel->id) echo 'selected="selected"'; @endphp>{{$accidentISTrustLevel->description}}</option>
                        @endforeach
                    </select>
                    @error('accidentISTrustLevel')
                    <small class="error">{{$message}}</small>
                    @enderror
                </div>

                <div class="form-group s100-100 height-large">
                    <label for="accidentISTLDescription">Περιγραφή επιπέδου εμπιστοσύνης</label>
                    <textarea name="accidentISTLDescription" id="accidentISTLDescription">{{$accident->accidentISTLDescription}}</textarea>
                    @error('accidentISTLDescription')
                    <small class="error">{{$message}}</small>
                    @enderror
                </div>
        {{-- <h3 class="form-h3">  </h3> --}}
        <div class="form-group s3-4">
            <label for="accidentInvestigationMethod">Μέθοδος Διερεύνησης</label>
            <select name="accidentInvestigationMethod">
                @foreach ($accidentInvestigationMethods as $accidentInvestigationMethod )
                <option value="{{$accidentInvestigationMethod->id}}" @php if($accident->accidentInvestigationMethod == $accidentInvestigationMethod->id) echo 'selected="selected"'; @endphp>{{$accidentInvestigationMethod->description}}</option>
                @endforeach
            </select>
            @error('accidentInvestigationMethod')
            <small class="error">{{$message}}</small>
            @enderror
        </div>

            <div class="form-group s1-4">
                <label for="accidentIMTrustLevel">Επίπεδο Εμπιστοσύνης</label>
                <select name="accidentIMTrustLevel" style="width: 100%;">
                    @foreach ($accidentIMTrustLevels as $accidentIMTrustLevel )
                    <option value="{{$accidentIMTrustLevel->id}}" @php if($accident->accidentIMTrustLevel == $accidentIMTrustLevel->id) echo 'selected="selected"'; @endphp>{{$accidentIMTrustLevel->description}}</option>
                    @endforeach
                </select>
                @error('accidentIMTrustLevel')
                <small class="error">{{$message}}</small>
                @enderror
            </div>

            <div class="form-group s100-100 height-large">
                <label for="accidentIMTLDescription">Περιγραφή επιπέδου εμπιστοσύνης</label>
                <textarea name="accidentIMTLDescription" id="accidentIMTLDescription">{{$accident->accidentIMTLDescription}}</textarea>
                @error('accidentIMTLDescription')
                <small class="error">{{$message}}</small>
                @enderror
            </div>
            <input type="hidden" name="user_id" value={{$userid}}>
        </div> <!-- FORM CATEGORY END -->



        <div class="form-category"> <!-- FORM SECTION -->
        <div class="form-group s100-100">
            <label for="accidentImage">Φόρτωση EXTRA Εικόνων</label>
            <input type="file" name="accidentImage" multiple="multiple" value="Αναζήτηση εικόνων">
            @error('accidentImage')
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
@endsection
