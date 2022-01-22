<?php
require_once 'College.php';

class CommonStudents
{
    public function printStudents(College $cda, College $forex) {
        //find common students between Cda College and Forex
        $commonStudents = [];
        /** @var Student $student1 */
        foreach ($cda->getStudents() as $student1) {
            /** @var Student $student2 */
            foreach ($forex->getStudents() as $student2) {
                if ($student1->id == $student2->id) {
                    $commonStudents[$student1->id] = $student1;
                    //exit from foreach loop. If I found George I dont need to go through the rest of students
                    break;
                }
            }
        }

        echo "<p style='font-size: 24px;font-weight: bold;color: green'>common students of {$cda->getCollegeName()} & {$forex->getCollegeName()}</p>";
        /** @var Student $student */
        foreach ($commonStudents as $student) {
            $student->printInfo();
        }
    }

    public function printSubjects(College $cda, College $forex) {
        throw new \Exception('Please add code here!');
    }
}