<script>
    // Function to populate dropdown options
    function populateDropdown(selector, data) {
        const dropdown = $(selector);
        dropdown.empty(); // Clear existing options
        data.forEach(item => {
            dropdown.append($('<option></option>').val(item.id).text(item.name));
        });
    }

    // Fetch education and country data in parallel
    Promise.all([
        $.get("{{ url('main/regencies') }}"),
        $.get("{{ url('main/degree') }}"),
        $.get("{{ url('main/provinces') }}"),
        $.get("{{ url('main/country') }}"),
        $.get("{{ url('main/districts') }}"),
        $.get("{{ url('main/skills') }}"),
    ]).then(([regenciesData, degreeData, provincesData, countryData, districtsData, skillsData]) => {
        // Populate education level regencies
        // populateDropdown("#lokasi_penempatan", regenciesData);
        populateDropdown("#city_now", regenciesData);
        populateDropdown("#alamat_perusahaan", regenciesData);
        // Populate education level degree
        // populateDropdown("#gelar_1", degreeData);
        // populateDropdown("#gelar_2", degreeData);
        // populateDropdown("#gelar_3", degreeData);
        // Populate education level proviences
        // populateDropdown("#province_now", provincesData);
        // Populate education level country
        // populateDropdown("#country_job", countryData);
        // Populate education level districts
        // populateDropdown("#village_now", districtsData);

    }).catch(error => {
        console.error("Error fetching data:", error);
    });
</script>