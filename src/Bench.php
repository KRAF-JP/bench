<?php

namespace Krafjp\Bench;

class Bench
{
    private int $count = 0;
    private int $insertCount = 0;
    private int $updateCount = 0;
    private float $start;

    public function __construct()
    {
        $this->start = microtime(true);
    }

    public function count(): int
    {
        return $this->count;
    }

    public function increment(): void
    {
        $this->count++;
    }

    public function incrementInsertCount(): void
    {
        $this->insertCount++;
    }

    public function incrementUpdateCount(): void
    {
        $this->updateCount++;
    }

    public function process(): void
    {
        $this->increment();
    }

    public function report(): string
    {
        $report = "\n処理時間: " . round((microtime(true) - $this->start), 2) . "s \n";

        if ($this->count > 0) {
            $report .= "処理件数: " . number_format($this->count) . "件 \n";
        }

        if ($this->insertCount > 0) {
            $report .= "登録データ件数: " . number_format($this->insertCount) . "件 \n";
        }

        if ($this->updateCount > 0) {
            $report .= "更新データ件数: " . number_format($this->updateCount) . "件 \n";
        }

        $report .= "メモリ: " . number_format(round(memory_get_usage(false) / 1024 / 1024), 1) . " MBytes \n"
            . "メモリ(peak): " . number_format(round(memory_get_peak_usage(false) / 1024 / 1024), 1) . " MBytes \n";

        return $report;
    }

    /**
     * @return float
     */
    public function getStart(): float
    {
        return $this->start;
    }

    /**
     * @param float $start
     */
    public function setStart(float $start): void
    {
        $this->start = $start;
    }

    /**
     * @return int
     */
    public function getUpdateCount(): int
    {
        return $this->updateCount;
    }

    /**
     * @param int $updateCount
     */
    public function setUpdateCount(int $updateCount): void
    {
        $this->updateCount = $updateCount;
    }

    /**
     * @return int
     */
    public function getInsertCount(): int
    {
        return $this->insertCount;
    }

    /**
     * @param int $insertCount
     */
    public function setInsertCount(int $insertCount): void
    {
        $this->insertCount = $insertCount;
    }

    /**
     * @return int
     */
    public function getCount(): int
    {
        return $this->count;
    }

    /**
     * @param int $count
     */
    public function setCount(int $count): void
    {
        $this->count = $count;
    }
}
