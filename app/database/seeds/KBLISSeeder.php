<?php

class KBLISSeeder extends DatabaseSeeder
{
    public function run()
    {
        /* Users table */
        $usersData = array(
            array(
                "username" => "administrator", "password" => Hash::make("password"), "email" => "admin@kblis.org",
                "name" => "kBLIS Administrator", "designation" => "Programmer"
            ),
            array(
                "username" => "external", "password" => Hash::make("password"), "email" => "admin@kblis.org",
                "name" => "External System User", "designation" => "Administrator", "image" => "/i/users/user-2.jpg"
            ),
            array(
                "username" => "lmorena", "password" => Hash::make("password"), "email" => "lmorena@kblis.org",
                "name" => "L. Morena", "designation" => "Lab Technologist", "image" => "/i/users/user-3.png"
            ),
            array(
                "username" => "abumeyang", "password" => Hash::make("password"), "email" => "abumeyang@kblis.org",
                "name" => "A. Abumeyang", "designation" => "Doctor"
            ),
        );

        foreach ($usersData as $user)
        {
            $users[] = User::create($user);
        }
        $this->command->info('users seeded');
        

        /* Specimen Types table */
        $specTypesData = array(
            array("name" => "Ascitic Tap"),
            array("name" => "Aspirate"),
            array("name" => "CSF"),
            array("name" => "Dried Blood Spot"),
            array("name" => "High Vaginal Swab"),
            array("name" => "Nasal Swab"),
            array("name" => "Plasma"),
            array("name" => "Plasma EDTA"),
            array("name" => "Pleural Tap"),
            array("name" => "Pus Swab"),
            array("name" => "Rectal Swab"),
            array("name" => "Semen"),
            array("name" => "Serum"),
            array("name" => "Skin"),
            array("name" => "Sputum"),
            array("name" => "Stool"),
            array("name" => "Synovial Fluid"),
            array("name" => "Throat Swab"),
            array("name" => "Urethral Smear"),
            array("name" => "Urine"),
            array("name" => "Vaginal Smear"),
            array("name" => "Water"),
            array("name" => "Whole Blood"),
        );

        foreach ($specTypesData as $specimenType)
        {
            $specTypes[] = SpecimenType::create($specimenType);
        }
        $this->command->info('specimen_types seeded');
        
        /* Test Categories table - These map on to the lab sections */
        $test_categories = TestCategory::create(array("name" => "PARASITOLOGY","description" => ""));
        $this->command->info('test_categories seeded');
        
        
        /* Measure Types */
        $measureTypes = array(
            array("id" => "1", "name" => "Numeric Range"),
            array("id" => "2", "name" => "Alphanumeric Values"),
            array("id" => "3", "name" => "Autocomplete"),
            array("id" => "4", "name" => "Free Text")
        );

        foreach ($measureTypes as $measureType)
        {
            MeasureType::create($measureType);
        }
        $this->command->info('measure_types seeded');
                
        /* Measures table */
        $measureBSforMPS = Measure::create(
            array("measure_type_id" => "2",
                "name" => "BS for mps", 
                "measure_range" => "No mps seen/+/++/+++/++++", 
                "unit" => ""));
        $measures = array(
            array("measure_type_id" => "2", "name" => "Grams stain", "measure_range" => "Positive/Negative", "unit" => ""),
            array("measure_type_id" => "2", "name" => "SERUM AMYLASE", "measure_range" => "Low/Normal/High", "unit" => ""),
            array("measure_type_id" => "2", "name" => "calcium", "measure_range" => "Low/Normal/High", "unit" => ""),
            array("measure_type_id" => "1", "name" => "URIC ACID", "measure_range" => "", "unit" => "mg/dl"),
            array("measure_type_id" => "4", "name" => "CSF for biochemistry", "measure_range" => "", "unit" => ""),
            array("measure_type_id" => "4", "name" => "PSA", "measure_range" => "", "unit" => ""),
            array("measure_type_id" => "1", "name" => "Total", "measure_range" => "", "unit" => "mg/dl"),
            array("measure_type_id" => "1", "name" => "Alkaline Phosphate", "measure_range" => "", "unit" => "u/l"),
            array("measure_type_id" => "2", "name" => "SGOT", "measure_range" => "Low/Normal/High", "unit" => ""),
            array("measure_type_id" => "1", "name" => "Direct", "measure_range" => "", "unit" => "mg/dl"),
            array("measure_type_id" => "1", "name" => "Total Proteins", "measure_range" => "", "unit" => ""),
            array("measure_type_id" => "4", "name" => "LFTS", "measure_range" => "", "unit" => "NULL"),
            array("measure_type_id" => "1", "name" => "Chloride", "measure_range" => "", "unit" => "mmol/l"),
            array("measure_type_id" => "1", "name" => "Potassium", "measure_range" => "", "unit" => "mmol/l"),
            array("measure_type_id" => "1", "name" => "Sodium", "measure_range" => "", "unit" => "mmol/l"),
            array("measure_type_id" => "4", "name" => "Electrolytes", "measure_range" => "", "unit" => ""),
            array("measure_type_id" => "1", "name" => "Creatinine", "measure_range" => "", "unit" => "mg/dl"),
            array("measure_type_id" => "1", "name" => "Urea", "measure_range" => "", "unit" => "mg/dl"),
            array("measure_type_id" => "4", "name" => "RFTS", "measure_range" => "", "unit" => ""),
            array("measure_type_id" => "4", "name" => "TFT", "measure_range" => "", "unit" => ""),
            array("measure_type_id" => "2", "name" => "Indirect COOMBS test", "measure_range" => "Positive/Negative", "unit" => ""),
            array("measure_type_id" => "2", "name" => "Direct COOMBS test", "measure_range" => "Positive/Negative", "unit" => ""),
            array("measure_type_id" => "2", "name" => "Du test", "measure_range" => "Positive/Negative", "unit" => "")
        );

        foreach ($measures as $measure)
        {
            Measure::create($measure);
        }
        $measureGXM = Measure::create(array("measure_type_id" => "4", "name" => "GXM", "measure_range" => "", "unit" => ""));
        $measureBG = Measure::create(
            array("measure_type_id" => "2", 
                "name" => "Blood Grouping", 
                "measure_range" => "O-/O+/A-/A+/B-/B+/AB-/AB+", 
                "unit" => ""));
        $measureHB = Measure::create(array("measure_type_id" => MeasureType::NUMERIC_RANGE, "name" => "HB", "measure_range" => "",
            "unit" => "g/dL"));

        $measuresUrinalysisData = array(
            array("measure_type_id" => "4", "name" => "Urine microscopy", "measure_range" => "", "unit" => ""),
            array("measure_type_id" => "4", "name" => "Pus cells", "measure_range" => "", "unit" => ""),
            array("measure_type_id" => "4", "name" => "S. haematobium", "measure_range" => "", "unit" => ""),
            array("measure_type_id" => "4", "name" => "T. vaginalis", "measure_range" => "", "unit" => ""),
            array("measure_type_id" => "4", "name" => "Yeast cells", "measure_range" => "", "unit" => ""),
            array("measure_type_id" => "4", "name" => "Red blood cells", "measure_range" => "", "unit" => ""),
            array("measure_type_id" => "4", "name" => "Bacteria", "measure_range" => "", "unit" => ""),
            array("measure_type_id" => "4", "name" => "Spermatozoa", "measure_range" => "", "unit" => ""),
            array("measure_type_id" => "4", "name" => "Epithelial cells", "measure_range" => "", "unit" => ""),
            array("measure_type_id" => "4", "name" => "ph", "measure_range" => "", "unit" => ""),
            array("measure_type_id" => "4", "name" => "Urine chemistry", "measure_range" => "", "unit" => ""),
            array("measure_type_id" => "4", "name" => "Glucose", "measure_range" => "", "unit" => ""),
            array("measure_type_id" => "4", "name" => "Ketones", "measure_range" => "", "unit" => ""),
            array("measure_type_id" => "4", "name" => "Proteins", "measure_range" => "", "unit" => ""),
            array("measure_type_id" => "4", "name" => "Blood", "measure_range" => "", "unit" => ""),
            array("measure_type_id" => "4", "name" => "Bilirubin", "measure_range" => "", "unit" => ""),
            array("measure_type_id" => "4", "name" => "Urobilinogen Phenlpyruvic acid", "measure_range" => "", "unit" => ""),
            array("measure_type_id" => "4", "name" => "pH", "measure_range" => "", "unit" => "")
            );

        foreach ($measuresUrinalysisData as $measureU) {
            $measuresUrinalysis[] = Measure::create($measureU);
        }

        $measuresWBCData = array(
            array("measure_type_id" => MeasureType::NUMERIC_RANGE, "name" => "WBC", "measure_range" => "",
                "unit" => "x10³/µL"),
            array("measure_type_id" => MeasureType::NUMERIC_RANGE, "name" => "Lym", "measure_range" => "","unit" => "L"),
            array("measure_type_id" => MeasureType::NUMERIC_RANGE, "name" => "Mon", "measure_range" => "", "unit" => "*"),
            array("measure_type_id" => MeasureType::NUMERIC_RANGE, "name" => "Neu", "measure_range" => "", "unit" => "*"),
            array("measure_type_id" => MeasureType::NUMERIC_RANGE, "name" => "Eos", "measure_range" => "", "unit" => ""),
            array("measure_type_id" => MeasureType::NUMERIC_RANGE, "name" => "Baso", "measure_range" => "", "unit" => ""),
            );

        foreach ($measuresWBCData as $value) {
            $measuresWBC[] = Measure::create($value);
        }

        $measureRangesWBC = array(
            array("measure_id" => $measuresWBC[0]->id, "age_min" => 0, "age_max" => 100, "gender" => MeasureRange::BOTH,
                "range_lower" => 4, "range_upper" => 11),
            array("measure_id" => $measuresWBC[1]->id, "age_min" => 0, "age_max" => 100, "gender" => MeasureRange::BOTH,
                "range_lower" => 1.5, "range_upper" => 4),
            array("measure_id" => $measuresWBC[2]->id, "age_min" => 0, "age_max" => 100, "gender" => MeasureRange::BOTH,
                "range_lower" => 0.1, "range_upper" => 9),
            array("measure_id" => $measuresWBC[3]->id, "age_min" => 0, "age_max" => 100, "gender" => MeasureRange::BOTH,
                "range_lower" => 2.5, "range_upper" => 7),
            array("measure_id" => $measuresWBC[4]->id, "age_min" => 0, "age_max" => 100, "gender" => MeasureRange::BOTH,
                "range_lower" => 0, "range_upper" => 6),
            array("measure_id" => $measuresWBC[5]->id, "age_min" => 0, "age_max" => 100, "gender" => MeasureRange::BOTH,
                "range_lower" => 0, "range_upper" => 2),
            );

        foreach ($measureRangesWBC as $value) {
            MeasureRange::create($value);
        }

        $this->command->info('measures seeded');
        
        /* Test Types table */
        $testTypeBS = TestType::create(array("name" => "BS for mps", "test_category_id" => $test_categories->id));
        $testTypeGXM = TestType::create(array("name" => "GXM", "test_category_id" => $test_categories->id));
        $testTypeHB = TestType::create(array("name" => "HB", "test_category_id" => $test_categories->id));
        $testTypeUrinalysis = TestType::create(array("name" => "Urinalysis", "test_category_id" => $test_categories->id));
        $testTypeWBC = TestType::create(array("name" => "WBC", "test_category_id" => $test_categories->id));

        $this->command->info('test_types seeded');

        /* TestType Measure table */
        TestTypeMeasure::create(array("test_type_id" => $testTypeBS->id, "measure_id" => $measureBSforMPS->id));
        TestTypeMeasure::create(array("test_type_id" => $testTypeGXM->id, "measure_id" => $measureGXM->id));
        TestTypeMeasure::create(array("test_type_id" => $testTypeGXM->id, "measure_id" => $measureBG->id));
        TestTypeMeasure::create(array("test_type_id" => $testTypeHB->id, "measure_id" => $measureHB->id));

        foreach ($measuresUrinalysis as $value) {
            TestTypeMeasure::create(array("test_type_id" => $testTypeUrinalysis->id, "measure_id" => $value->id));
        }

        foreach ($measuresWBC as $value) {
            TestTypeMeasure::create(array("test_type_id" => $testTypeWBC->id, "measure_id" => $value->id));
        }

        $this->command->info('testtype_measures seeded');

        /* testtype_specimentypes table */
        DB::table('testtype_specimentypes')->insert(
            array("test_type_id" => $testTypeBS->id, "specimen_type_id" => $specTypes[count($specTypes)-1]->id));
        DB::table('testtype_specimentypes')->insert(
            array("test_type_id" => $testTypeGXM->id, "specimen_type_id" => $specTypes[count($specTypes)-1]->id));
        DB::table('testtype_specimentypes')->insert(
            array("test_type_id" => $testTypeHB->id, "specimen_type_id" => $specTypes[count($specTypes)-1]->id));
        DB::table('testtype_specimentypes')->insert(
            array("test_type_id" => $testTypeHB->id, "specimen_type_id" => $specTypes[6]->id));
        DB::table('testtype_specimentypes')->insert(
            array("test_type_id" => $testTypeHB->id, "specimen_type_id" => $specTypes[7]->id));
        DB::table('testtype_specimentypes')->insert(
            array("test_type_id" => $testTypeHB->id, "specimen_type_id" => $specTypes[12]->id));
        DB::table('testtype_specimentypes')->insert(
            array("test_type_id" => $testTypeUrinalysis->id, "specimen_type_id" => $specTypes[19]->id));
        DB::table('testtype_specimentypes')->insert(
            array("test_type_id" => $testTypeUrinalysis->id, "specimen_type_id" => $specTypes[20]->id));
        DB::table('testtype_specimentypes')->insert(
            array("test_type_id" => $testTypeWBC->id, "specimen_type_id" => $specTypes[count($specTypes)-1]->id));

        $this->command->info('testtype_specimentypes seeded');

        /* Patients table */
        $patients_array = array(
            array("name" => "Jam Felicia", "email" => "fj@x.com", "patient_number" => "1002", "dob" => "2000-01-01", "gender" => "1"),
            array("name" => "Emma Wallace", "email" => "emma@snd.com", "patient_number" => "1003", "dob" => "1990-03-01", "gender" => "1"),
            array("name" => "Jack Tee", "email" => "info@jt.co.ke", "patient_number" => "1004", "dob" => "1999-12-18", "gender" => "0"),
            array("name" => "Hu Jintao", "email" => "hu@.un.org", "patient_number" => "1005", "dob" => "1956-10-28", "gender" => "0"),
            array("name" => "Lance Opiyo", "email" => "lance@x.com", "patient_number" => "2150", "dob" => "2012-01-01", "gender" => "0"));
        foreach ($patients_array as $pat) {
            $patients[] = Patient::create($pat);
        }

        $this->command->info('patients seeded');

        /* Test Phase table */
        $test_phases = array(
          array("id" => "1", "name" => "Pre-Analytical"),
          array("id" => "2", "name" => "Analytical"),
          array("id" => "3", "name" => "Post-Analytical")
        );
        foreach ($test_phases as $test_phase)
        {
            TestPhase::create($test_phase);
        }
        $this->command->info('test_phases seeded');

        /* Test Status table */
        $test_statuses = array(
          array("id" => "1","name" => "not-received","test_phase_id" => "1"),//Pre-Analytical
          array("id" => "2","name" => "pending","test_phase_id" => "1"),//Pre-Analytical
          array("id" => "3","name" => "started","test_phase_id" => "2"),//Analytical
          array("id" => "4","name" => "completed","test_phase_id" => "3"),//Post-Analytical
          array("id" => "5","name" => "verified","test_phase_id" => "3")//Post-Analytical
        );
        foreach ($test_statuses as $test_status)
        {
            TestStatus::create($test_status);
        }
        $this->command->info('test_statuses seeded');

        /* Specimen Status table */
        $specimen_statuses = array(
          array("id" => "1", "name" => "specimen-not-collected"),
          array("id" => "2", "name" => "specimen-accepted"),
          array("id" => "3", "name" => "specimen-rejected")
        );
        foreach ($specimen_statuses as $specimen_status)
        {
            SpecimenStatus::create($specimen_status);
        }
        $this->command->info('specimen_statuses seeded');

        /* Visits table */
        
        for ($i=0; $i < 7; $i++) { 
            $visits[] = Visit::create(array("patient_id" => $patients[rand(0,count($patients)-1)]->id));
        }
        $this->command->info('visits seeded');

        /* Rejection Reasons table */
        $rejection_reasons_array = array(
          array("reason" => "Poorly labelled"),
          array("reason" => "Over saturation"),
          array("reason" => "Insufficient Sample"),
          array("reason" => "Scattered"),
          array("reason" => "Clotted Blood"),
          array("reason" => "Two layered spots"),
          array("reason" => "Serum rings"),
          array("reason" => "Scratched"),
          array("reason" => "Haemolysis"),
          array("reason" => "Spots that cannot elute"),
          array("reason" => "Leaking"),
          array("reason" => "Broken Sample Container"),
          array("reason" => "Mismatched sample and form labelling"),
          array("reason" => "Missing Labels on container and tracking form"),
          array("reason" => "Empty Container"),
          array("reason" => "Samples without tracking forms"),
          array("reason" => "Poor transport"),
          array("reason" => "Lipaemic"),
          array("reason" => "Wrong container/Anticoagulant"),
          array("reason" => "Request form without samples"),
          array("reason" => "Missing collection date on specimen / request form."),
          array("reason" => "Name and signature of requester missing"),
          array("reason" => "Mismatched information on request form and specimen container."),
          array("reason" => "Request form contaminated with specimen"),
          array("reason" => "Duplicate specimen received"),
          array("reason" => "Delay between specimen collection and arrival in the laboratory"),
          array("reason" => "Inappropriate specimen packing"),
          array("reason" => "Inappropriate specimen for the test"),
          array("reason" => "Inappropriate test for the clinical condition"),
          array("reason" => "No Label"),
          array("reason" => "Leaking"),
          array("reason" => "No Sample in the Container"),
          array("reason" => "No Request Form"),
          array("reason" => "Missing Information Required"),
        );
        foreach ($rejection_reasons_array as $rejection_reason)
        {
            $rejection_reasons[] = RejectionReason::create($rejection_reason);
        }
        $this->command->info('rejection_reasons seeded');

        /* Specimen table */
       
        $this->command->info('specimens seeded');
        $now = new DateTime();

        /* Test table */
        Test::create(
            array(
                "visit_id" => $visits[rand(0,count($visits)-1)]->id,
                "test_type_id" => $testTypeBS->id,//BS for MPS
                "specimen_id" => $this->createSpecimen(
                        Test::NOT_RECEIVED, Specimen::NOT_COLLECTED,
                        SpecimenType::all()->last()->id,
                        $users[rand(0, count($users)-1)]->id),
                "test_status_id" => Test::NOT_RECEIVED,
                "requested_by" => "Dr. Abou Meyang",
                "created_by" => $users[rand(0, count($users)-1)]->id,
            )
        );        
        
        Test::create(
            array(
                "visit_id" => $visits[rand(0,count($visits)-1)]->id,
                "test_type_id" => $testTypeHB->id,
                "specimen_id" => $this->createSpecimen(
                        Test::PENDING, Specimen::NOT_COLLECTED,
                        SpecimenType::all()->last()->id,
                        $users[rand(0, count($users)-1)]->id),
                "test_status_id" => Test::PENDING,
                "requested_by" => "Dr. Abou Meyang",
                "created_by" => $users[rand(0, count($users)-1)]->id,
            )
        );        
        
        Test::create(
            array(
                "visit_id" => $visits[rand(0,count($visits)-1)]->id,
                "test_type_id" => $testTypeGXM->id,
                "specimen_id" => $this->createSpecimen(
                        Test::PENDING, Specimen::NOT_COLLECTED,
                        SpecimenType::all()->last()->id,
                        $users[rand(0, count($users)-1)]->id),
                "test_status_id" => Test::PENDING,
                "requested_by" => "Dr. Abou Meyang",
                "created_by" => $users[rand(0, count($users)-1)]->id,
            )
        );        
        
        Test::create(
            array(
                "visit_id" => $visits[rand(0,count($visits)-1)]->id,
                "test_type_id" => $testTypeBS->id,//BS for MPS
                "specimen_id" => $this->createSpecimen(
                        Test::PENDING, Specimen::ACCEPTED,
                        SpecimenType::all()->last()->id,
                        $users[rand(0, count($users)-1)]->id),
                "test_status_id" => Test::PENDING,
                "created_by" => $users[rand(0, count($users)-1)]->id,
                "requested_by" => "Dr. Abou Meyang",
            )
        );        
        
        $test_gxm_accepted_completed = Test::create(
            array(
                "visit_id" => $visits[rand(0,count($visits)-1)]->id,
                "test_type_id" => $testTypeGXM->id,
                "specimen_id" => $this->createSpecimen(
                        Test::COMPLETED, Specimen::ACCEPTED, 
                        SpecimenType::all()->last()->id, 
                        $users[rand(0, count($users)-1)]->id),
                "interpretation" => "Perfect match.",
                "test_status_id" => Test::COMPLETED,
                "created_by" => $users[rand(0, count($users)-1)]->id,
                "tested_by" => $users[rand(0, count($users)-1)]->id,
                "requested_by" => "Dr. Abou Meyang",
                "time_started" => $now->format('Y-m-d H:i:s'),
                "time_completed" => $now->add(new DateInterval('PT12M8S'))->format('Y-m-d H:i:s'),
            )
        );        
        
        $test_hb_accepted_completed = Test::create(
            array(
                "visit_id" => $visits[rand(0,count($visits)-1)]->id,
                "test_type_id" => $testTypeHB->id,
                "specimen_id" => $this->createSpecimen(
                        Test::COMPLETED, Specimen::ACCEPTED, 
                        SpecimenType::all()->last()->id, 
                        $users[rand(0, count($users)-1)]->id),
                "interpretation" => "Do nothing!",
                "test_status_id" => Test::COMPLETED,
                "created_by" => $users[rand(0, count($users)-1)]->id,
                "tested_by" => $users[rand(0, count($users)-1)]->id,
                "requested_by" => "Genghiz Khan",
                "time_started" => $now->format('Y-m-d H:i:s'),
                "time_completed" => $now->add(new DateInterval('PT5M23S'))->format('Y-m-d H:i:s'),
            )
        );
        
        $tests_accepted_started = Test::create(
            array(
                "visit_id" => $visits[rand(0,count($visits)-1)]->id,
                "test_type_id" => $testTypeGXM->id,
                "specimen_id" => $this->createSpecimen(
                    Test::STARTED, Specimen::ACCEPTED, SpecimenType::all()->last()->id, 
                    $users[rand(0, count($users)-1)]->id),
                "test_status_id" => Test::STARTED,
                "requested_by" => "Dr. Abou Meyang",
                "created_by" => $users[rand(0, count($users)-1)]->id,
                "time_started" => $now->format('Y-m-d H:i:s'),
            )
        );

        $tests_accepted_completed = Test::create(
            array(
                "visit_id" => $visits[rand(0,count($visits)-1)]->id,
                "test_type_id" => $testTypeBS->id,//BS for MPS
                "specimen_id" => $this->createSpecimen(
                        Test::COMPLETED, Specimen::ACCEPTED, 
                        SpecimenType::all()->last()->id, 
                        $users[rand(0, count($users)-1)]->id),
                "interpretation" => "Positive",
                "test_status_id" => Test::COMPLETED,
                "created_by" => $users[rand(0, count($users)-1)]->id,
                "tested_by" => $users[rand(0, count($users)-1)]->id,
                "requested_by" => "Ariel Smith",
                "time_started" => $now->format('Y-m-d H:i:s'),
                "time_completed" => $now->add(new DateInterval('PT7M34S'))->format('Y-m-d H:i:s'),
            )
        );        
        
        $tests_accepted_verified = Test::create(
            array(
                "visit_id" => $visits[rand(0,count($visits)-1)]->id,
                "test_type_id" => $testTypeBS->id,//BS for MPS
                "specimen_id" => $this->createSpecimen(
                        Test::VERIFIED, Specimen::ACCEPTED, 
                        SpecimenType::all()->last()->id, 
                        $users[rand(0, count($users)-1)]->id),
                "interpretation" => "Very high concentration of parasites.",
                "test_status_id" => Test::VERIFIED,
                "created_by" => $users[rand(0, count($users)-1)]->id,
                "tested_by" => $users[rand(0, count($users)-1)]->id,
                "verified_by" => $users[rand(0, count($users)-1)]->id,
                "requested_by" => "Genghiz Khan",
                "time_started" => $now,
                "time_completed" => $now->add(new DateInterval('PT5M17S'))->format('Y-m-d H:i:s'),
                "time_verified" => $now->add(new DateInterval('PT112M33S'))->format('Y-m-d H:i:s'),
            )
        );        
        
        $tests_rejected_pending = Test::create(
            array(
                "visit_id" => $visits[rand(0,count($visits)-1)]->id,
                "test_type_id" => $testTypeBS->id,//BS for MPS
                "specimen_id" => $this->createSpecimen(
                        Test::PENDING, Specimen::REJECTED, 
                        SpecimenType::all()->last()->id, 
                        $users[rand(0, count($users)-1)]->id,
                        $users[rand(0, count($users)-1)]->id,
                        $rejection_reasons[rand(0,count($rejection_reasons)-1)]->id),
                "test_status_id" => Test::PENDING,
                "requested_by" => "Dr. Abou Meyang",
                "created_by" => $users[rand(0, count($users)-1)]->id,
                "time_started" => $now->format('Y-m-d H:i:s'),
            )
        );        
        
        $tests_rejected_started = Test::create(
            array(
                "visit_id" => $visits[rand(0,count($visits)-1)]->id,
                "test_type_id" => $testTypeBS->id,//BS for MPS
                "specimen_id" => $this->createSpecimen(
                        Test::STARTED, Specimen::REJECTED, 
                        SpecimenType::all()->last()->id, 
                        $users[rand(0, count($users)-1)]->id,
                        $users[rand(0, count($users)-1)]->id,
                        $rejection_reasons[rand(0,count($rejection_reasons)-1)]->id),
                "test_status_id" => Test::STARTED,
                "created_by" => $users[rand(0, count($users)-1)]->id,
                "requested_by" => "Bony Em",
                "time_started" => $now->format('Y-m-d H:i:s'),
            )
        );        
        
        $tests_rejected_completed = Test::create(
            array(
                "visit_id" => $visits[rand(0,count($visits)-1)]->id,
                "test_type_id" => $testTypeBS->id,//BS for MPS
                "specimen_id" => $this->createSpecimen(
                        Test::COMPLETED, Specimen::REJECTED, 
                        SpecimenType::all()->last()->id, 
                        $users[rand(0, count($users)-1)]->id,
                        $users[rand(0, count($users)-1)]->id,
                        $rejection_reasons[rand(0,count($rejection_reasons)-1)]->id),
                "interpretation" => "Budda Boss",
                "test_status_id" => Test::COMPLETED,
                "created_by" => $users[rand(0, count($users)-1)]->id,
                "tested_by" => $users[rand(0, count($users)-1)]->id,
                "requested_by" => "Ed Buttler",
                "time_started" => $now->format('Y-m-d H:i:s'),
                "time_completed" => $now->add(new DateInterval('PT30M4S'))->format('Y-m-d H:i:s'),
            )
        );

        Test::create(
            array(
                "visit_id" => $visits[rand(0,count($visits)-1)]->id,
                "test_type_id" => $testTypeUrinalysis->id,
                "specimen_id" => $this->createSpecimen(
                        Test::PENDING, Specimen::NOT_COLLECTED,
                        SpecimenType::all()->last()->id,
                        $users[rand(0, count($users)-1)]->id),
                "test_status_id" => Test::PENDING,
                "requested_by" => "Dr. Abou Meyang",
                "created_by" => $users[rand(0, count($users)-1)]->id,
            )
        );        
        
        Test::create(
            array(
                "visit_id" => $visits[rand(0,count($visits)-1)]->id,
                "test_type_id" => $testTypeWBC->id,
                "specimen_id" => $this->createSpecimen(
                        Test::PENDING, Specimen::NOT_COLLECTED,
                        SpecimenType::all()->last()->id,
                        $users[rand(0, count($users)-1)]->id),
                "test_status_id" => Test::PENDING,
                "requested_by" => "Dr. Abou Meyang",
                "created_by" => $users[rand(0, count($users)-1)]->id,
            )
        );        
        
        $this->command->info('tests seeded');

        /* Test Results table */
        $testResults = array(
            array(
                "test_id" => $tests_accepted_verified->id,
                "measure_id" => $measureBSforMPS->id,//BS for MPS
                "result" => "+++",
            ),
            array(
                "test_id" => $tests_accepted_completed->id,
                "measure_id" => $measureBSforMPS->id,//BS for MPS
                "result" => "++",
            ),
            array(
                "test_id" => $test_gxm_accepted_completed->id,
                "measure_id" => $measureGXM->id,
                "result" => "COMPATIBLE WITH 061832914 B/G A POS.EXPIRY19/8/14",
            ),
            array(
                "test_id" => $test_gxm_accepted_completed->id,
                "measure_id" => $measureBG->id,
                "result" => "A+",
            ),
            array(
                "test_id" => $test_hb_accepted_completed->id,
                "measure_id" => $measureHB->id,
                "result" => "13.7",
            ),
            array(
                "test_id" => $tests_rejected_completed->id,
                "measure_id" => $measureBSforMPS->id,//BS for MPS
                "result" => "No mps seen",
            ),
        );        
        foreach ($testResults as $testResult)
        {
            TestResult::create($testResult);
        }
        $this->command->info('test results seeded');
        
        /* Referrals table */
        $referralsData = array(
                array("Bungoma District Hospital"),
                array("Bumula Sub-District Hospital"),
                array("Kenyatta National Hospital"),
                array("Moi Referral Teaching Hospital"),
                array("Webuye Sub-District Hospital"));
        foreach ($referralsData as $value) {
            DB::insert("INSERT INTO referrals (referring_institution) VALUES (?)", $value);
        }

        $this->command->info('referrals seeded');

        /* Permissions table */
        $permissions = array(
            array("name" => "view_names", "display_name" => "Can view patient names"),
            array("name" => "manage_patients", "display_name" => "Can add patients"),

            array("name" => "receive_external_test", "display_name" => "Can receive test requests"),
            array("name" => "request_test", "display_name" => "Can request new test"),
            array("name" => "accept_test_specimen", "display_name" => "Can accept test specimen"),
            array("name" => "reject_test_specimen", "display_name" => "Can reject test specimen"),
            array("name" => "change_test_specimen", "display_name" => "Can change test specimen"),
            array("name" => "start_test", "display_name" => "Can start tests"),
            array("name" => "enter_test_results", "display_name" => "Can enter tests results"),
            array("name" => "edit_test_results", "display_name" => "Can edit test results"),
            array("name" => "verify_test_results", "display_name" => "Can verify test results"),
            array("name" => "send_results_to_external_system", "display_name" => "Can send test results to external systems"),

            array("name" => "manage_users", "display_name" => "Can manage users"),
            array("name" => "manage_test_catalog", "display_name" => "Can manage test catalog"),
            array("name" => "manage_lab_configurations", "display_name" => "Can manage lab configurations"),
            array("name" => "view_reports", "display_name" => "Can view reports")
        );
        foreach ($permissions as $permission) {
            Permission::create($permission);
        }
        $this->command->info('Permissions table seeded');

        /* Roles table */
        $roles = array(
            array("name" => "Superadmin"),
            array("name" => "Technologist"),
            array("name" => "Receptionist")
        );
        foreach ($roles as $role) {
            Role::create($role);
        }
        $this->command->info('Roles table seeded');

        $user1 = User::find(1);
        $role1 = Role::find(1);
        $permissions = Permission::all();

        //Assign all permissions to role administrator
        foreach ($permissions as $permission) {
            $role1->attachPermission($permission);
        }
        //Assign role Administrator to user 1 administrator
        $user1->attachRole($role1);

        /* Instruments table */
        $instrument = array(
            "name" => "Celltac F Mek 8222",
            "description" => "Automatic analyzer with 22 parameters and WBC 5 part diff Hematology Analyzer",
            "ip" => "192.168.1.12",
            "hostname" => "HEMASERVER"
            // "created_at" => date('Y-m-d H:i:s')
        );
        
        $instrumentID = DB::table('instruments')->insertGetId($instrument);

        DB::table('instrument_testtypes')->insert(
            array("instrument_id" => $instrumentID, "test_type_id" => $testTypeWBC->id,
                "interfacing_class" => "CelltacWBC"));

        $this->command->info('Instruments table seeded');

    }

    public function createSpecimen(
            $testStatus,
            $specimenStatus,
            $specimenTypeID,
            $acceptor = 0, $rejector = 0, $rejectReason = ""){

        $values["specimen_type_id"] = $specimenTypeID;
        $values["specimen_status_id"] = $specimenStatus;


        if($testStatus == Test::STARTED)$values["test_phase_id"] = TestPhase::ANALYTICAL;
        elseif($testStatus < Test::STARTED)$values["test_phase_id"] = TestPhase::PRE_ANALYTICAL;
        else $values["test_phase_id"] = TestPhase::POST_ANALYTICAL;

        if($specimenStatus == Specimen::ACCEPTED){
            $values["accepted_by"] = $acceptor;
            $values["time_accepted"] = date('Y-m-d H:i:s');
        }
        if($specimenStatus == Specimen::REJECTED){
            $values["rejected_by"] = $rejector;
            $values["rejection_reason_id"] = $rejectReason;
            $values["time_rejected"] = date('Y-m-d H:i:s');
        }
        
        $specimen = Specimen::create($values);

        return $specimen->id;
    }
}
