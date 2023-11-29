<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Doctor>
 */
class DoctorFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        $titles = [
            'General Dentist', 'Orthodontist', 'Oral Surgeon', 'Periodontist', 'Pediatric Dentist',
            'Endodontist', 'Prosthodontist', 'Cosmetic Dentist', 'Implantologist', 'Oral Pathologist',
            'Dental Anesthesiologist', 'Public Health Dentist', 'Community Dentist', 'Geriatric Dentist',
            'Forensic Dentist', 'Dental Radiologist', 'Dental Researcher', 'Dental Technician', 'Dental Assistant',
            'Dental Nurse', 'Dental Therapist', 'Dental Educator', 'Dental Administrator', 'Dental Consultant',
            'Maxillofacial Prosthodontist', 'Oral Medicine Specialist', 'Restorative Dentist',
            'TMD Specialist (Temporomandibular Joint Disorders)', 'Public Health Dentist',
            'Dental Hygiene Educator', 'Dental Hygiene Therapist', 'Dental Office Manager',
            'Dental Receptionist', 'Dental Sales Representative', 'Dental Equipment Technician',
            'Dental Marketing Specialist', 'Dental Laboratory Manager', 'Dental Research Scientist',
            'Dental Public Health Specialist', 'Dental Outreach Coordinator',
        ];

        $descriptions = [
            'Provides primary dental care and preventive treatments for a wide range of dental conditions.',
            'Specializes in the diagnosis, prevention, and correction of malpositioned teeth and jaws.',
            'Performs surgical procedures on the mouth, jaws, and related structures.',
            'Focuses on the prevention, diagnosis, and treatment of periodontal diseases and conditions.',
            'Specializes in the oral health care of children and adolescents.',
            'Specializes in the diagnosis and treatment of diseases and injuries affecting dental pulp.',
            'Deals with the restoration and replacement of missing teeth with artificial appliances.',
            'Enhances the appearance of teeth, gums, and bite through various cosmetic procedures.',
            'Specializes in the placement and maintenance of dental implants to replace missing teeth.',
            'Studies and diagnoses diseases of the oral and maxillofacial regions.',
            'Administers anesthesia and monitors patients during dental procedures.',
            'Focuses on improving the oral health of communities through education and preventive programs.',
            'Provides dental care services with a focus on community outreach and public health.',
            'Specializes in the oral health care of older adults, addressing age-related dental concerns.',
            'Applies dental knowledge to assist in solving legal issues, such as identifying human remains.',
            'Interprets and diagnoses conditions based on dental imaging, such as X-rays.',
            'Conducts research to advance knowledge and technologies in the field of dentistry.',
            'Fabricates dental prosthetics, such as crowns, bridges, and dentures, based on dentist prescriptions.',
            'Supports dentists in clinical and administrative tasks to ensure smooth dental procedures.',
            'Assists dentists in patient care and provides support in various dental procedures.',
            'Delivers preventive and basic dental care, often working in collaboration with dentists.',
            'Teaches and educates dental students or professionals in academic or clinical settings.',
            'Manages the administrative aspects of a dental practice, including scheduling and billing.',
            'Provides expert advice to dental practices on various aspects of patient care and business operations.',
            'Specializes in the restoration and replacement of defects in the head and neck region.',
            'Diagnoses and manages oral conditions that may be manifestations of systemic diseases.',
            'Focuses on restoring damaged or missing teeth to improve function and aesthetics.',
            'Diagnoses and treats disorders affecting the temporomandibular joint and surrounding structures.',
            'Teaches and educates individuals on proper oral hygiene practices and preventive care.',
            'Provides preventive dental care, including cleanings and oral health education.',
            'Manages the day-to-day operations of a dental office, overseeing staff and administrative tasks.',
            'Greets patients, schedules appointments, and manages the front desk in a dental office.',
            'Represents and sells dental products and equipment to dental offices and professionals.',
            'Installs, maintains, and repairs dental equipment and instruments.',
            'Develops and implements marketing strategies to promote dental services and attract patients.',
            'Manages a dental laboratory, overseeing the production of dental prosthetics and appliances.',
            'Conducts scientific research to advance knowledge in dental and oral health.',
            'Focuses on improving oral health at a population level through public health initiatives.',
            'Organizes and coordinates outreach programs to provide dental care to underserved communities.',
        ];

        $img_path = [

        ];
        $index = $this->faker->unique()->numberBetween(0, count($titles) - 1);

        return [
            'name' => fake()->name(),
            'title' => $titles[$index],
            'desc' => $descriptions[$index],
            'img_path' => 'Image/team-' . fake()->numberBetween(1, 3) . '.jpg',
        ];
    }
}
