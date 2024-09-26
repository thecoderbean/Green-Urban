<?php
class Costumers
{
    /**
     *
     */
    public function __construct()
    {
    }

    /**
     *
     */
    public function __destruct()
    {
    }
    
    /**
     * Set friendly columns\' names to order tables\' entries
     */
    public function setOrderingValues()
    {
        $ordering = [
            'id' => 'ID',
            'username' => 'username',
            'address' => 'address',
            'email' => 'email',
            'password' => 'password',
            'timestamp' => 'timestamp'
        ];

        return $ordering;
    }
}
?>
