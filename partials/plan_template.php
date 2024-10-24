<?php
// Query to fetch plans and join with types table, ordered by percent in ascending order
$sql = "SELECT hm2_plans.id, hm2_plans.name, hm2_plans.min_deposit, hm2_plans.max_deposit, hm2_plans.percent, hm2_types.q_days 
        FROM hm2_plans 
        INNER JOIN hm2_types ON hm2_plans.parent = hm2_types.id 
        ORDER BY hm2_plans.percent ASC";

$result = $conn->query($sql);

// Check if records exist
if ($result->num_rows > 0) {
    // Loop through each plan and output the HTML template
    while ($row = $result->fetch_assoc()) {
        $plan_name = $row['name'];
        $min_deposit = number_format($row['min_deposit'], 2);
        $max_deposit = number_format($row['max_deposit'], 2);
        $percent = $row['percent'];
        $q_days = $row['q_days'];
        $total_return = ($percent * $q_days); // Example calculation for total return

        echo '
        <div class="col-xl-4 col-lg-4 col-md-6 mb-30">
            <div class="package-card text-center bg_img"
                 data-background="assets/templates/bit_gold/images/bg/bg-4.png">
                <h4 class="package-card__title base--color mb-2 p-3 rounded bg-dark">' . $plan_name . '</h4>
                <ul class="package-card__features mt-4">
                    <li>Return ' . $percent . '%</li>
                    <li>For ' . $q_days . ' Days</li>
                    <li>
                        Total ' . $percent . '%
                        + <span class="badge badge-success">Capital</span>
                    </li>
                </ul>
                <div class="package-card__range mt-5 base--color"> $' . $min_deposit . ' - $' . $max_deposit . '</div>
                <a href="javascript:void(0)" data-toggle="modal" data-target="#depoModal"
                   data-resource=\'{"id":' . $row['id'] . ',"name":"' . $plan_name . '","minimum":"' . $min_deposit . '","maximum":"' . $max_deposit . '","interest":"' . $percent . '","times":"' . $q_days . '"}\'
                   class="cmn-btn btn-md mt-4 investButton">Invest Now</a>
            </div><!-- package-card end -->
        </div>
        ';
    }
} else {
    echo "No plans available.";
}
?>
