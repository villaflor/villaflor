<?php


namespace App\Actions\Profile;


class GenerateProfile
{
    static public function mark(): array
    {
        return [
            "firstname" => "Mark Anthony",
            "lastname" => "Villaflor",
            "title" => "Computer Programmer / Backend Developer",
            "description" => "Honours student of Seneca College with two web programming project completed.",
            "email" => "mark@villaflor.ca",
            "photo" => "https://public.villaflor.one/images/K1EUwDZozJli4lc30sKfcDz4x1ixDX2EZeJ0n7es.jpg",
            "color" => "teal",
            "website" => "https://villaflor.ca",
            "linkedin" => "https://www.linkedin.com/in/mark-anthony-villaflor/",
            "github" => "https://github.com/villaflor",
            "educations" => [
                [
                    "school" => "Seneca College",
                    "location" => "Toronto, Canada",
                    "degree" => "Advanced Diploma in Computer Programming and Analysis",
                    "start_date" => "Jan, 2015",
                    "end_date" => "Oct, 2017",
                    "description" => "Activities and Societies: Honours: Graduated with a GPA of 3.6 ⁄ 4.0 in advanced diploma program. Senior Project Design: Earned “A” grade on program design project as team leader on Eventer application. Relevant courses: Data warehousing, Project Management, Security, Database Design, Web application, Web ⁄ Application Architecture, Mobile iOS programming, Introduction in Operating System, Data Communications Networks, and Basic Windows Administration.",
                ],
                [

                    "school" => "Urdaneta City University",
                    "location" => "Philippines",
                    "degree" => "Bachelor of Science in Nursing",
                    "start_date" => "June, 2008",
                    "end_date" => "Apr, 2012",
                    "description" => "BS, Nursing",
                ],
            ],
            "portfolios" => [
                [
                    "title" => "Eventer",
                    "start_date" => "2017-01-01T00:00:00.000000Z",
                    "end_date" => "2017-04-30T00:00:00.000000Z",
                    "meta" => "MySQL",
                    "description" => "Our project is to create a web application which helps the users easily schedule their events with friends, family, colleagues, and business participants. The project to fulfill the requirement for Project Planning and Management course.
        Appointed as a leader of the team.
        Graded by the project advisor with an A grade for the project.
        Maintained the project on time by creating and organizing tasks for the whole team.
        Created reports to be submitted to the project advisor.",
                    "image" => "https://public.villaflor.one/images/y8ASG7w3x2kHgvTnXm6zNRuqRMP8yEGf6hylwo1X.jpg",
                    "url" => null,
                    "types" => [
                        [
                            "name" => "MySQL",
                            "reference" => "mysql",
                        ],
                    ],
                ],
                [
                    "title" => "Wecreu",
                    "start_date" => "2017-05-01T00:00:00.000000Z",
                    "end_date" => "2017-08-31T00:00:00.000000Z",
                    "meta" => "MySQL",
                    "description" => "Implements a website that generates an online shopping web application for end-user using PHP, HTML, Bootstrap, JavaScript, and MySQL languages. The project to fulfill the requirement for Project Implementation course.
        Implemented the LAMP for the web server giving the other members to another task.
        Maintained codes quality using GitHub’s merge review feature.",
                    "image" => "https://public.villaflor.one/images/S3kIQ3KfDNDM8BBQHguTXSlvdyQAHouz1Z0Sk1R5.jpg",
                    "url" => null,
                    "types" => [
                        [
                            "name" => "MySQL",
                            "reference" => "mysql",
                        ],
                        [
                            "name" => "Backend",
                            "reference" => "backend",
                        ],
                        [
                            "name" => "Frontend",
                            "reference" => "frontend",
                        ],
                    ],
                ],
            ],
            "skills" => [
                [
                    "name" => "Laravel",
                    "top_skill" => 1,
                    "description" => null,
                ],
                [
                    "name" => "PHP",
                    "top_skill" => 1,
                    "description" => null,
                ],
                [
                    "name" => "MySQL",
                    "top_skill" => 1,
                    "description" => null,
                ],
                [
                    "name" => "Vue.js",
                    "top_skill" => 0,
                    "description" => null,
                ],
                [
                    "name" => "JavaScript",
                    "top_skill" => 0,
                    "description" => null,
                ],
//                [
//                    "name" => "C#",
//                    "top_skill" => 0,
//                    "description" => null,
//                ],
//                [
//                    "name" => "ASP.Net",
//                    "top_skill" => 0,
//                    "description" => null,
//                ],
                [
                    "name" => "HTML",
                    "top_skill" => 0,
                    "description" => null,
                ],
                [
                    "name" => "Database Design",
                    "top_skill" => 0,
                    "description" => null,
                ],
                [
                    "name" => "Git",
                    "top_skill" => 0,
                    "description" => null,
                ],
                [
                    "name" => "Rest API",
                    "top_skill" => 0,
                    "description" => null,
                ],
                [
                    "name" => "Docker",
                    "top_skill" => 0,
                    "description" => null,
                ],
            ],
            "testimonials" => [
                [
                    "name" => "",
                    "position" => "Management",
                    "institution" => "Wise Publishing",
                    "made_at" => "Apr, 2021",
                    "message" => "Mark has an encyclopedic knowledge of our platforms. He is able to work directly with stakeholders to produce innovative products that drive growth. Mark provides guidance on best practices, making each project better than the last. He does all of that while remaining good-natured, patient and helpful — with all members of the team.",
                ],
                [
                    "name" => "Ron Tarr",
                    "position" => "Professor",
                    "institution" => "School of Information and Communications Technology, Seneca College, York Campus",
                    "made_at" => "Nov, 2017",
                    "message" => "I taught Mr. Villaflor in 3 subjects Data warehousing, Database Design & SQL and Introduction to programming using C. Over that time I have seen a consistently hard worker with a great attitude. The courses had a design component as well as SQL using Oracle and building a star scheming the DW course using Microsoft SQLServer.
        One thing I really like is someone who can deliver what was required on time and done well. That is how Mark works, every time. Further to his credit, he helped others to understand the subject and pushed his group to perform better. This work ethic resulted in his tests and exam results in the top group of all 3 classes.",
                ],
            ],
            "work_experiences" => [
                [
                    "title" => "Developer-Team Lead",
                    "company" => "Wise Publishing, Inc.",
                    "location" => "Toronto, Canada",
                    "start_date" => "Sept, 2019",
                    "end_date" => null,
                    "description" => "Permanent Full-time",
                ],
                [
                    "title" => "Developer Specialist",
                    "company" => "Wise Publishing, Inc.",
                    "location" => "Toronto, Canada",
                    "start_date" => "Sept, 2019",
                    "end_date" => "May, 2021",
                    "description" => "Permanent Full-time",
                ],
                [
                    "title" => "Developer Intern",
                    "company" => "Wise Publishing, Inc.",
                    "location" => "Toronto, Canada",
                    "start_date" => "May, 2019",
                    "end_date" => "Aug, 2019",
                    "description" => "Internship",
                ],
            ],
        ];
    }
}
