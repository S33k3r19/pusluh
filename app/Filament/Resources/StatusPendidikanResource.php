<?php

namespace App\Filament\Resources;

use App\Filament\Resources\StatusPendidikanResource\Pages;
use App\Filament\Resources\StatusPendidikanResource\RelationManagers;
use App\Models\StatusPendidikan;
use Filament\Forms;
use Filament\Forms\Form;
use Filament\Resources\Resource;
use Filament\Tables;
use Filament\Tables\Table;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\SoftDeletingScope;

class StatusPendidikanResource extends Resource
{
    protected static ?string $model = StatusPendidikan::class;
    protected static ?string $navigationGroup = 'Master Data';
    protected static ?int $navigationSort = 4;
    protected static ?string $navigationLabel = 'Status Pendidikan';
    protected static ?string $navigationIcon = 'heroicon-o-rectangle-stack';

    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                Forms\Components\Textarea::make('nama')
                    ->required()
                    ->maxLength(65535)
                    ->columnSpanFull(),
            ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                //
            ])
            ->filters([
                //
            ])
            ->actions([
                Tables\Actions\EditAction::make(),
            ])
            ->bulkActions([
                Tables\Actions\BulkActionGroup::make([
                    Tables\Actions\DeleteBulkAction::make(),
                ]),
            ]);
    }

    public static function getRelations(): array
    {
        return [
            //
        ];
    }

    public static function getPages(): array
    {
        return [
            'index' => Pages\ListStatusPendidikans::route('/'),
            'create' => Pages\CreateStatusPendidikan::route('/create'),
            'edit' => Pages\EditStatusPendidikan::route('/{record}/edit'),
        ];
    }
}
