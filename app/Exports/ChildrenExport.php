<?php

namespace App\Exports;

use App\Models\Admin;
use App\Models\Child;
use App\Models\FlightTicket;
use App\Models\Order;
use Maatwebsite\Excel\Concerns\FromQuery;
use Maatwebsite\Excel\Concerns\RegistersEventListeners;
use Maatwebsite\Excel\Concerns\ShouldAutoSize;
use Maatwebsite\Excel\Concerns\WithColumnWidths;
use Maatwebsite\Excel\Concerns\WithDefaultStyles;
use Maatwebsite\Excel\Concerns\WithEvents;
use Maatwebsite\Excel\Concerns\WithHeadings;
use Maatwebsite\Excel\Concerns\WithMapping;
use Maatwebsite\Excel\Concerns\WithStyles;
use Maatwebsite\Excel\Concerns\WithTitle;
use Maatwebsite\Excel\Events\AfterSheet;
use PhpOffice\PhpSpreadsheet\Style;
use PhpOffice\PhpSpreadsheet\Style\Style as DefaultStyles;
use PhpOffice\PhpSpreadsheet\Worksheet\Worksheet;

class ChildrenExport implements WithHeadings, FromQuery, WithMapping, WithColumnWidths, ShouldAutoSize, WithStyles, WithEvents
{
    use RegistersEventListeners;
    public $child;

    protected $columns;

    public function __construct($child, array $columns)
    {
        $this->child = $child;
        $this->columns = $columns;
    }

    public function headings(): array
    {
        return array_map(function ($column) {
            return __('children.' . $column); // Format for better readability
        }, $this->columns);

        // Use the column names as headings
        // return array_map(function ($column) {
        //     return ucwords(str_replace('_', ' ', $column)); // Format for better readability
        // }, $this->columns);

        // $headings = [];

        // if (in_array('id', $this->columns)) {
        //     $headings['id'] = __('admins.id');
        // }
        // if (in_array('name', $this->columns)) {
        //     $headings['name'] = __('admins.name');
        // }
        // if (in_array('email', $this->columns)) {
        //     $headings['email'] = __('admins.email');
        // }

        // $headings['id'] = __('children.id');
        // $headings['first_name'] = __('children.first_name');
        // $headings['father_name'] = __('children.father_name');
        // $headings['grand_father_name'] = __('children.grand_father_name');
        // $headings['family_name'] = __('children.family_name');
        // $headings['personal_id'] = __('children.personal_id');
        // $headings['birthday'] = __('children.birthday');
        // $headings['gender'] = __('children.gender');
        // $headings['health_status'] = __('children.health_status');
        // $headings['class'] = __('children.class');
        // $headings['number_of_people_including_mother'] = __('children.number_of_people_including_mother');
        // $headings['guardian_full_name'] = __('children.guardian_full_name');
        // $headings['guardian_personal_id'] = __('children.guardian_personal_id');
        // $headings['guardian_relationship_with_the_child'] = __('children.guardian_relationship_with_the_child');
        // $headings['governoate_id'] = __('children.governoate_id');
        // $headings['city_id'] = __('children.city_id');
        // $headings['authorized_contact_number'] = __('children.authorized_contact_number');
        // $headings['whatsApp_number'] = __('children.whatsApp_number');

        //return $headings;
    }

    public function query()
    {
        $query = Child::with(['childFile', 'childFamily', 'childFather', 'childMother', 'childGuardian', 'childFile', 'governorate', 'city'])->select($this->columns);
        return $query;
    }

    public function map($row): array
    {
        // unset($this->columns[7]);
        // unset($this->columns[5]);

        // $items = array_map(function ($column) use ($row) {
        //     return $row[$column]; // Format for better readability
        // }, $this->columns);

        $items['id'] = $row->id;
        $items['first_name'] = $row->first_name;
        $items['father_name'] = $row->father_name;
        $items['grand_father_name'] = $row->grand_father_name;
        $items['family_name'] = $row->family_name;
        $items['personal_id'] = $row->personal_id;
        $items['birthday'] = $row->birthday;
        $items['gender'] = $row->childGender();
        $items['health_status'] = $row->childHealthStatus();
        $items['class'] = $row->class;
        $items['classification'] = $row->childClassification();
        $items['city_id'] = $row->city->name;
        $items['governoate_id'] = $row->governorate->name;
        $items['authorized_contact_number'] = $row->authorized_contact_number;
        $items['whatsApp_number'] = $row->whatsApp_number;

        return $items;
    }

    public function columnWidths(): array
    {
        return [
            'B' => 30,
        ];
    }

    public function styles(Worksheet $sheet)
    {
        // return [
        //     '1' => ['font' => ['bold' => true]],
        // ];
        $sheet->getStyle('1')->getFont()->setBold(true);
        $sheet
            ->getStyle('B1:B' . $sheet->getHighestRow())
            ->getAlignment()
            ->setWrapText(true);
    }

    /**
     * @return array|void
     */
    public function defaultStyles(DefaultStyles $defaultStyle)
    {
        return [
            'font' => [
                'name' => 'Calibri',
                'size' => 14,
            ],
            'alignment' => [
                'horizontal' => Style\Alignment::HORIZONTAL_CENTER,
                'vertical' => Style\Alignment::VERTICAL_CENTER,
            ],
        ];
    }

    public static function afterSheet(AfterSheet $event)
    {
        $direction = Lang() == 'ar' ? true : false;
        return $event->sheet->getDelegate()->setRightToLeft($direction);
    }
}
