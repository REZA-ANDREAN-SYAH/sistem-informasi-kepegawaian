<?php

return [
    'default_log_name' => 'default',
    'default_auth_driver' => null,
    'subject_returns_soft_deleted_models' => false,
    'activity_model' => \Spatie\Activitylog\Models\Activity::class,
    'table_name' => 'activity_log',
    'database_connection' => null,
    'delete_records_older_than_days' => 365,
    'perform_logging' => true,
];
