<?php


$data = array(
    'result' => array(
        [
            'id' => 1,
            'vacancy_base_url' => '?category=detailjob',
            'vacancy_company_name' => 'Bonecom Tricom',
            'vacancy_name'   => 'IT PROGRAMMER ON KARAWANG PLANT',
            'education_name' => 'S1',
            'stream_group_name' => 'Manufactur',
            'job_description'  => 'Web Developer'

        ],
        [
            'id' => 2,
            'vacancy_base_url' => '?category=detailjob',
            'vacancy_company_name' => 'Ravalia Inti Mandiri BEKASI PLANT',
            'vacancy_name'   => 'MARKETING',
            'education_name' => 'S1',
            'stream_group_name' => 'Manufactur',
            'job_description'  => 'Sales'
        ],
    )
);
echo json_encode($data);
