<?php

interface Repository{
    public function connect();
    
    public function execute($statement);
    
    public function query($sql);
    
    public function prepare($sql);
    
    public function setResults($results);
    
    public function getResults();
    
    public function prepareParam($statement, $parameters);
    
    public function startTransaction();
    
    public function commit();
    
    public function rollBack();
}
