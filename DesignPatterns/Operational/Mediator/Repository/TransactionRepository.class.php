<?php


namespace DesignPatterns\Operational\Mediator\Repository;


class TransactionRepository implements Revertable {

    /**
     * @param int $id
     * @param int $status
     * @throws DatabaseTimeoutException
     * @throws StatusChangeException
     */
    public function changeTransactionStatus($id, $status)
    {
        try {
            $db->action();
            throw new DatabaseTimeoutException;
        }
        catch(\Exception $ex)
        {
            switch(true) {
                case $ex instanceof DatabaseTimeoutException:
                    $db->rollback();
                    break;
            }
            throw new StatusChangeException;
        }
    }

    public function Revert() {}
}
