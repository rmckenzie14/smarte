<?php
    function check_trade_ceiling($ceiling, $data) {
        $total = 0;
        foreach ($data as $item) {
            $total += $item['value'];
        }
        if ($total > $ceiling) {
            // Implement trade ceiling policy
            // For example, limit the number of permits issued for imports or exports
            // Or increase tariffs on certain products
            return "Trade ceiling exceeded";
        } else {
            return "Trade ceiling not exceeded";
        }
    }
    ?>