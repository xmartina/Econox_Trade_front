<?php
// Assuming you have already connected to the database using $conn

// Fetch data from hm2_plans and join with hm2_types based on parent_id = id
$query = "SELECT hm2_plans.id, hm2_plans.name, hm2_plans.min_deposit, hm2_plans.max_deposit, hm2_plans.percent, hm2_types.q_days 
        FROM hm2_plans 
        INNER JOIN hm2_types ON hm2_plans.parent = hm2_types.id 
        ORDER BY hm2_plans.percent ASC";

$result = mysqli_query($conn, $query);

// Check if any rows are returned
if (mysqli_num_rows($result) > 0) {
    while ($row = mysqli_fetch_assoc($result)) {
        // Plan data
        $planName = $row['plan_name'];
        $minDeposit = number_format($row['min_deposit'], 2);
        $maxDeposit = number_format($row['max_deposit'], 2);
        $percent = number_format($row['percent'], 2);
        $qDays = $row['q_days'];
        $totalReturn = $percent * $qDays;  // Assuming daily return percentage over q_days

        // Output HTML for each plan
        echo '
        <div class="col-lg-3 mb-30">
            <div class="package-card text-center bg_img" data-background="assets/templates/bit_gold/images/bg/bg-4.png">
                <h4 class="package-card__title base--color mb-2">' . htmlspecialchars($planName) . '</h4>
                <ul class="package-card__features mt-4">
                    <li>Return ' . $percent . '%</li>
                    <li>Every Day</li>
                    <li>For ' . $qDays . ' Days</li>
                    <li>
                        Total ' . $totalReturn . '%
                        + <span class="badge badge-success">Capital</span>
                    </li>
                </ul>
                <div class="package-card__range mt-5 base--color"> $' . $minDeposit . ' - $' . $maxDeposit . '</div>
                <a href="javascript:void(0)" data-toggle="modal" data-target="#depoModal"
                   data-resource="{&quot;id&quot;:' . $row['plan_id'] . ',&quot;name&quot;:&quot;' . htmlspecialchars($planName) . '&quot;,&quot;minimum&quot;:&quot;' . $minDeposit . '&quot;,&quot;maximum&quot;:&quot;' . $maxDeposit . '&quot;,&quot;interest&quot;:&quot;' . $percent . '&quot;,&quot;times&quot;:&quot;' . $qDays . '&quot;}"
                   class="cmn-btn btn-md mt-4 investButton">Invest Now</a>
            </div>
        </div>';
    }
} else {
    echo '<p>No plans found.</p>';
}
?>
