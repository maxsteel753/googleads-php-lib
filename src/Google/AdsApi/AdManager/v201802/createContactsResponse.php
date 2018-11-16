<?php

namespace Google\AdsApi\AdManager\v201802;


/**
 * This file was generated from WSDL. DO NOT EDIT.
 */
class createContactsResponse
{

    /**
     * @var \Google\AdsApi\AdManager\v201802\Contact[] $rval
     */
    protected $rval = null;

    /**
     * @param \Google\AdsApi\AdManager\v201802\Contact[] $rval
     */
    public function __construct(array $rval = null)
    {
      $this->rval = $rval;
    }

    /**
     * @return \Google\AdsApi\AdManager\v201802\Contact[]
     */
    public function getRval()
    {
      return $this->rval;
    }

    /**
     * @param \Google\AdsApi\AdManager\v201802\Contact[] $rval
     * @return \Google\AdsApi\AdManager\v201802\createContactsResponse
     */
    public function setRval(array $rval)
    {
      $this->rval = $rval;
      return $this;
    }

}