<?php

namespace Days85\HiveOS\Models;

use Illuminate\Support\Collection;

class FarmListItem extends AbstractModel
{
    /**
     * @var Collection<Farm>
     */
    protected Collection $data;

    /**
     * @var Collection<TagU>
     */
    protected Collection $tags;

    /**
     * @return Collection<Farm>
     */
    public function getData(): Collection
    {
        return $this->data;
    }

    /**
     * @param Collection<Farm> $data
     * @return FarmListItem
     */
    public function setData(Collection $data): FarmListItem
    {
        $this->data = $data;
        return $this;
    }

    /**
     * @return Collection<TagU>
     */
    public function getTags(): Collection
    {
        return $this->tags;
    }

    /**
     * @param Collection<TagU> $tags
     * @return FarmListItem
     */
    public function setTags(Collection $tags): FarmListItem
    {
        $this->tags = $tags;
        return $this;
    }

    /**
     * {@inheritDoc}
     */
    public function fromArray($data): static
    {
        if (!empty($data['data'])) {
            $this->setData($this->collectData(new Farm(), $data['data']));
        }

        if (!empty($data['tags'])) {
            $this->setTags($this->collectData(new TagU(), $data['tags']));
        }
        return $this;
    }
}
