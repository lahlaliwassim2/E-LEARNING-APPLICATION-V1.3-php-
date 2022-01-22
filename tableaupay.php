<?php 
 $tableaupay = [
     [
        'Name' => 'wassim',
        'payment_schedual' => 'first',
        'bill_number' => '00012223',
        'amount_paid' => 'DHS 100,000',
        'balance_amount' => 'DHS 500,000',
        'date' => '05-Jan, 2022',


     ] ,
      [
        'Name' => 'yahya',
        'payment_schedual' => 'first',
        'bill_number' => '00012223',
        'amount_paid' => 'DHS 100,000',
        'balance_amount' => 'DHS 500,000',
        'date' => '05-Jan, 2022',


     ] ,
      [
        'Name' => 'nouredine',
        'payment_schedual' => 'first',
        'bill_number' => '00012223',
        'amount_paid' => 'DHS 100,000',
        'balance_amount' => 'DHS 500,000',
        'date' => '05-Jan, 2022',


     ] , 
     [
      'Name' => 'mohemed',
      'payment_schedual' => 'first',
      'bill_number' => '00012223',
      'amount_paid' => 'DHS 100,000',
      'balance_amount' => 'DHS 500,000',
      'date' => '05-Jan, 2022',


     ] 
 ] ;
            foreach($tableaupay as $tableau){
                echo '<tr>
                <td class="align-middle p-3">'.$tableau['Name'].'</td>
                <td class="align-middle">f'.$tableau['payment_schedual'].'</td>
                <td class="align-middle">'.$tableau['bill_number'].'</td>
                <td class="align-middle">'.$tableau['amount_paid'].'</td>
                <td class="align-middle">'.$tableau['balance_amount'].'</td>
                <td class="align-middle"'.$tableau['date'].'</td>
                <td class="align-middle">
                  <span class="ms-4">
                    <svg
                      width="15"
                      height="14"
                      viewBox="0 0 15 14"
                      fill="none"
                      xmlns="http://www.w3.org/2000/svg"
                    >
                      <g clip-path="url(#clip0_1_13)">
                        <path
                          d="M7.49999 7.875C7.94201 7.875 8.36594 7.69063 8.6785 7.36244C8.99106 7.03425 9.16665 6.58913 9.16665 6.125C9.16665 5.66087 8.99106 5.21575 8.6785 4.88756C8.36594 4.55937 7.94201 4.375 7.49999 4.375C7.47394 4.375 7.45103 4.38156 7.42577 4.38293C7.50608 4.61516 7.52164 4.86664 7.47063 5.10783C7.41961 5.34903 7.30413 5.56994 7.13774 5.74465C6.97136 5.91935 6.76096 6.04061 6.53125 6.09417C6.30154 6.14774 6.06205 6.1314 5.84087 6.04707C5.84087 6.07441 5.83332 6.09848 5.83332 6.125C5.83332 6.35481 5.87643 6.58238 5.96019 6.7947C6.04394 7.00702 6.16671 7.19993 6.32147 7.36244C6.63403 7.69063 7.05796 7.875 7.49999 7.875ZM14.9094 6.60078C13.4971 3.70754 10.7013 1.75 7.49999 1.75C4.29868 1.75 1.50207 3.70891 0.0906108 6.60105C0.0310383 6.72479 0 6.86149 0 7.00014C0 7.13878 0.0310383 7.27549 0.0906108 7.39922C1.50285 10.2925 4.29868 12.25 7.49999 12.25C10.7013 12.25 13.4979 10.2911 14.9094 7.39895C14.9689 7.27521 15 7.13851 15 6.99986C15 6.86122 14.9689 6.72451 14.9094 6.60078ZM7.49999 2.625C8.15926 2.625 8.80372 2.83027 9.35188 3.21486C9.90005 3.59944 10.3273 4.14607 10.5796 4.78561C10.8319 5.42515 10.8979 6.12888 10.7693 6.80782C10.6407 7.48675 10.3232 8.11039 9.85701 8.59987C9.39083 9.08936 8.79689 9.4227 8.15029 9.55775C7.50368 9.6928 6.83346 9.62349 6.22437 9.35858C5.61529 9.09367 5.09469 8.64507 4.72842 8.0695C4.36215 7.49392 4.16665 6.81723 4.16665 6.125C4.16762 5.19705 4.51912 4.3074 5.14403 3.65125C5.76894 2.99509 6.61623 2.62601 7.49999 2.625ZM7.49999 11.375C4.70415 11.375 2.14946 9.69855 0.833319 7C1.57354 5.47419 2.7573 4.23556 4.21301 3.46363C3.66952 4.20246 3.33332 5.11793 3.33332 6.125C3.33332 7.28532 3.77231 8.39812 4.55371 9.21859C5.33511 10.0391 6.39492 10.5 7.49999 10.5C8.60505 10.5 9.66486 10.0391 10.4463 9.21859C11.2277 8.39812 11.6667 7.28532 11.6667 6.125C11.6667 5.11793 11.3305 4.20246 10.787 3.46363C12.2427 4.23556 13.4264 5.47419 14.1667 7C12.8508 9.69855 10.2958 11.375 7.49999 11.375Z"
                          fill="#00C1FE"
                        />
                      </g>
                      <defs>
                        <clipPath id="clip0_1_13">
                          <rect width="15" height="14" fill="white" />
                        </clipPath>
                      </defs>
                    </svg>
                  </span>
                </td>
                </tr> ';
            }
?>
