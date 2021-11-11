<?php

namespace Days85\HiveOS\Models;

use Illuminate\Support\Collection;

class AbstractModel implements ModelInterface
{
    /**
     * {@inheritDoc}
     */
    public function fromArray($data): static
    {
        foreach ($data as $key => $value) {
            if (is_array($value)) {
                continue;
            }

            $property = $this->snakeToPascal($key);

            if (!property_exists(static::class, lcfirst($property))) {
                continue;
            }

            $this->{'set' . $property}($value);
        }
        return $this;
    }

    /**
     * @param $input
     * @return string
     */
    protected function snakeToPascal($input): string
    {
        return str_replace(' ', '', ucwords(str_replace('_', ' ', $input)));
    }

    /**
     * @param ModelInterface $model
     * @param array $array
     * @return Collection
     */
    protected function collectData(ModelInterface $model, array $array): Collection
    {
        $collection = new Collection();

        foreach ($array as $data) {
            $model->reset();
            $model->fromArray($data);
            $collection->add($model);
        }

        return $collection;
    }

    /**
     * {@inheritDoc}
     */
    public function reset(): void
    {
        foreach ($this as $key => $value) {
            unset($this->$key);
        }
    }
}
